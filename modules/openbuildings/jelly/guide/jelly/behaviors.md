Jerry provides a lot of functionality out of the box, but often you'll have custom requirements, and would like to reuse code for your models and keep things DRY. Don't worry Jerry is quite extensible - you can create bits of functionality called "Behvaiors" that can modify the existing model and builder methods and add new methods. 

To wrap your head around all this we'll need to first quickly explore the event system for models in Jerry.

## Jerry Events

In the lifetime of each model(and builder) there are several events being triggered. 

### Available events

* model.before_create
* model.before_update
* model.before_save
* model.after_create
* model.after_update
* model.after_save
* model.before_validate
* model.after_validate
* model.before_delete
* model.after_delete

* meta.before_finalize
* meta.after_finalize

* builder.before_select

On model save, `before_create` and `after_create` are called for newly created models, `before_update` and `after_update` are triggered for loaded model that have already been previously saved to the database, and `before_save` and `after_save` are called in both cases.

	$new_client = Jelly::factory('client');
	$new_client->save();                                       // before_create, before_save, after_create after_save events triggered

	$old_client = Jelly::factory('client', 1);
	$old_client->save();                                       // before_update, before_save, after_update after_save events triggered

`before_validate` and `after_validate` are triggered when `check()` is called

	$old_client = Jelly::factory('client', 1);
	$old_client->check();                                      // before_validate, after_validate events triggered

`before_validate` and `after_validate` are triggered when `delete()` is called

	$old_client = Jelly::factory('client', 1);
	$old_client->delete();                                     // before_delete, after_delete events triggered

`before_finalize` and `after_finalize` are triggered when `initialize()` method is called that creates the Jelly_Meta. This is executed only once for each model.

`before_select` is triggered on every builder select performed

### Binding events

To tap into that functionality you'll have to bind events to your custom functions that perform one task or another. This is usually done in the initialize phase of the model

	class Model_Order extends Jelly_Model {

		public static function initialize(Jelly_Meta $meta)
		{
			// ...
			$meta->events()->bind('model.after_save', 'Model_Order::after_save');
		}
	}

## Jerry behaviors

Jerry comes with some behaviors already built for you - this is functionality that can be cherry picked and added to your models as you need it. Existing behaviors are:

* nested
* paranoid
* sluggable
* sortable
* uploadable

### Nested Behavior

Specify this behavior if you want to model a tree structure by providing a parent association and a children association. This behavior requires that you have a foreign key column, which by default is called parent_id.

Example :


	class Model_Order extends Jelly_Model {

		public static function initialize(Jelly_Meta $meta)
		{
			// ...
			$meta->behaviors(array(
				'nested' => Jelly::behavior('nested', array('field' => 'parent_id'))
			));
		}
	}

<pre>
root
 \_ child1
      \_ subchild1
      \_ subchild2
</pre>

Create the nested tree:

	$root      = Jelly::factory('order', 'root');
	$child1    = Jelly::factory('child1', 'child1');
	$subchild1 = Jelly::factory('subchild1', 'subchild1');

	// Get all root elements
	Jelly::factory('order')->root()->select_all(); // Jelly_Collection: Model_Order(1)

	// Check if element is root
	$root->is_root();                                          // TRUE

	// Get parent element
	$root->parent->loaded();                                   // FALSE
	$child->parent->name;                                      // 'root'
	$subchild->parent->name;                                   // 'child1'
	
	// Get children elements
	$root->children;                                           // Jelly_Collection: Model_Order(1)

	// Get the root element
	$subchild->root()->name;                                   // 'root'
	$child->root()->name;                                      // 'root'

	// Get a chain of parents
	$subchild->parents();                                      // Jelly_Collection: Model_Order(2)

### Paranoid Behavior

When you want to keep deleted object inside the database and when you call `delete()` only to mark a flag as is_deleted to TRUE and then exclude those objects from the general selects, you can use `paranoid` behavior. This behavior requires that you have a boolean column, which by default is called is_deleted.

	class Model_Order extends Jelly_Model {

		public static function initialize(Jelly_Meta $meta)
		{
			// ...
			$meta->behaviors(array(
				'paranoid' => Jelly::behavior('paranoid', array('field' => 'is_deleted'))
			));
		}
	}

	$order = Jelly::factory('order', 1);
	echo Jelly::factory('order')->count();                     // 5

	$order->delete();
	echo Jelly::factory('order')->count();                     // 4

	// Get the count of all the objects (deleted or no)
	echo Jelly::factory('order')->deleted('all')->count();     // 5

	// Get the count of deleted objects
	echo Jelly::factory('order')->deleted('deleted')->count(); // 1


	// Get deleted object
	$order = Jelly::query('order')->key(1)->deleted('deleted')->find();
	$order->restore_delete();

	echo Jelly::factory('order')->count();                     // 5

	// Permanently delete an object
	$order->real_delete();
	echo Jelly::factory('order')->count();                     // 4
	echo Jelly::factory('order')->deleted('all')->count();     // 4

## Sluggable Behavior

The sluggable behavior is used for the use case where you want to have a human readable urls, that are automatically generated from your titles. You add a special field, called "slug" that gets automatically populated with the title, stripped down of all the undesirable characters that will not show well in the URL, and letters get converted to ASCII whenever possible. Additionally the ID of the object gets added, so you can then search by ID and handle the case of changing URLS.

	class Model_Order extends Jelly_Model {

		public static function initialize(Jelly_Meta $meta)
		{
			// ...
			$meta->field('title', Jelly::field('name'));
			$meta->name_key('title');
			$meta->behaviors(array(
				'sluggable' => Jelly::behavior('sluggable')
			));
		}
	}

	$order->title = 'new title';

	// Get the right slug before the model is saved
	echo $order->build_slug();                                 // 'new-title-1';
	
	$order->save();
	echo $order->slug;                                         // 'new-title-1';

	Jelly::query('order')->where_slug('new-title-1')->find();
	Jelly::query('order')->find_by_slug('new-title-1');
	Jelly::query('order')->find_by_slug_insist('new-title-1');

The last 3 rows need a more deeper explanation. If the id (1) at the end of the string matches an order id, and the whole string matches the slug in the database, then we'll return the order with that slug / id. However if the id does match, but the slug is different, then a special exception Jelly_Exception_Sluggable will be thrown, containing the slug and the object that's been found, but that has different slug. This will allow you to implement auto redirecting URLS that go to the correct address even if the user has changed the title / slug for the link.

If the ID does not match, `find_by_slug_insist()` will throw the normal Jelly_Exception_NotFound.

This behavior has some options:

* uses_primary_key
* unique
* pattern
* slug

#### uses_primary_key, default TRUE

If you set `uses_primary_key` to FALSE then it will not add the id at the end of the string and the special functionality for throwing Jelly_Exception_Sluggable exceptions will not be available. Only the name key will be used for the slug

#### unique, default TRUE

By default the slug field, added to the model will have a `unique` option set to TRUE, you can control this option directly from the behavior option `unique`

#### pattern

If you want to really do a custom slug, you can manually set the regex that matches the slug in where_slug through the `pattern` option

#### slug

If you want a custom slug, based on different fields of the model you can use the `slug` option - this has to be a callable function that will be given the model as the first argument and will construct the source for the string. After that the string goes through transliteration, lowercase conversion and trimming so don't worry about this stuff in this function

	class Model_Order extends Jelly_Model {

		public static function initialize(Jelly_Meta $meta)
		{
			$meta->behaviors(array(
				'sluggable' => Jelly::behavior('sluggable', array('uses_primary_key' => FALSE, 'slug' => 'Model_Test_Tag::_slug'))
			));

			// Set fields
			$meta->fields(array(
				'id'              => Jelly::field('primary'),
				'name'            => Jelly::field('string'),
				'date'            => Jelly::field('timestamp'),
			));
		}

		public static function _slug(Jelly_Model $model)
		{
			return $model->name().'-'.date('Y-m', $model->date);
		}
	}


### Sortable Behavior

When you want to have a user-ordered list of items you can use the `sortbale` behavior. You will need a position field in your database (configurable with the `field` option). And any new objects will be added at the end of the list.

	class Model_Order extends Jelly_Model {

		public static function initialize(Jelly_Meta $meta)
		{
			// ...

			$meta->behaviors(array(
				'sortable' => Jelly::behavior('sortable', array('field' => 'position'))
			));
		}

		// Get all the orders, ordered by position
		$orders = Jelly::query('order')->select_all();

		// Add element to the end of the list (position is last inserted ID)
		$orders = Jelly::factory('order')->set('name', 'new order')->save();
	}

### Uploadable Behavior

This is discussed in depth in [Uploads](/OpenBuildings/Jerry/blob/master/guide/jelly/uploads.md)
