If you’re used to using raw SQL to find database records, then you will generally find that there are better ways to carry out the same operations. Jerry insulates you from the need to use SQL in most cases.

Code examples throughout this guide will refer to one or more of the following models:

> All of the following models use id as the primary key, unless specified otherwise.

```php
<?php
class Model_Client extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta->associations(array(
			'address' => Jelly::association('hasone')
			'orders' => Jelly::association('hasmany')
			'roles' => Jelly::association('manytomany')
		));

		$meta->name_key('title');

		// ...
	}
}

class Model_Address extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta->association('client', Jelly::association('belongsto'));

		// ...
	}
}

class Model_Order extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta->association('client', Jelly::association('belongsto'));
		$meta->association('items', Jelly::association('hasmany'));

		// ...
	}
}

class Model_Item extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta->association('order', Jelly::association('belongsto'));

		// ...
	}
}


class Model_Role extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		$meta->association('clients', Jelly::association('manytomany'));

		// ...
	}
}
?>
```

## Geting the builder object

All searches and interactions with the database are performed through the Jelly_Builder object. Its a generic class uses the kohana database functionality, but usually you want it tied to a specific model so that you have a more spesific context when you perform searches.

To get a builder for a specific model use the `query()` method

	$builder = Jelly::query('client');

	echo $builder->select_all(); // Jelly_Collection: Model_Client(5)


## Retrieving a Single Object

Jerry provides several different ways of retrieving a single object.


### Using a factory Method

The simplest and most stright forward way to retrieve an object is with the `factory()` method. It has 2 arguments - the first is the model name and the second is the id:

	$client = Jelly::factory('client', 1);

You can use a name key for the model if it has one defined as is the case with the client model

	$client = Jelly::factory('client', 'Petrov');

If the item has not been found, or if you omit the second argument, then `factory()` will return an empty model object

	$client = Jelly::factory('client');
	$client->loaded(); // FALSE

### Using the find() Method

If you have a more complex query and want to get only one model out of it (the first one) then you should use the `find()` or `find_insist()` methods. They basically do a `limit(1)`

	Jelly::query('client')->find(1)

	// Throw Jelly_Exception_NotFound exception if the object was not found in the database
	Jelly::query('client')->find_insist(1)

	// Specific key
	Jelly::query('client')->find(1)
	Jelly::query('client')->find('Petrov')

## Retrieving Multiple Objects

Retrieving multiple objects is always performed with a `select_all()` method call on a `Jelly_Builder` object. It returns a Jelly_Collection object which is an iterator and behaves like an array (you can do `foreach` and `[]` on it)

### Specific ids

If you want to get objects with a specific primary_key, just use the `find()` method on a builder and pass an array. It will restrict the search to those ids with a IN SQL clause. If you pass an empty array, then an empty Jelly_Colleciton will be returned. If you use a find_insist with multiple ids, then if any of the records is missing, it will throw a Jelly_Exception_NotFound exception.

	Jelly::query('client')->find(array());                    // Jelly_Collection: Model_Client(0)
	Jelly::query('client')->find(array(1,2));                 // Jelly_Collection: Model_Client(2)

	Jelly::query('client')->find_insist(array(1,2, 100));     // Throws Jelly_Exception_NotFound


## Jelly_Builder query methods

`Jelly_Builder` has a lot of methods to help you abstract the SQL queries away

* key()
* where()
* where_close()
* where_open()
* or_where()
* or_where_close()
* or_where_open()
* and_where()
* and_where_close()
* and_where_open()
* having()
* having_close()
* having_open()
* and_having()
* and_having_close()
* and_having_open()
* or_having()
* or_having_close()
* or_having_open()
* join()
* on()
* join_association()
* distinct()
* order_by()
* group_by()
* limit()
* offset()
* columns()
* count()
* select_array()
* reset()

### key()

If you want to limit the records to specific ids, then you can use the `key()` method. It uses the unique_key method to determine what column to use for the WHERE clasue - by default primary_key for numeric values and name_key for string values. However you can extend this method in the builder and have some other logic. This is explained below. You can also pass an array of ids.

	Jelly::query('client')->key(1)->find();                   // Model_Client(1)
	Jelly::query('client')->key('Pesho')->find();             // Model_Client(1)
	Jelly::query('client')->key(array(1, 2))->select_all();   // Jelly_Collection: Model_Client(2)

### where(), and_where()

This is the basic constraint method. It adds a WHERE SQL clause and requires 3 methods - column, operator and value:

	Jelly::query('client')->where('title', '=', 'Patrik');    // SELECT clients.* FROM clients WHERE title = 'Patrick'
	Jelly::query('client')->where('title', 'LIKE', 'Pat%');   // SELECT clients.* FROM clients WHERE title LIKE 'Pat%'

`where()`, `and_where()` are the same method - `where()` is just a shortcut.

There are a lot of logic to help you in writing precise SQL queries in the `where()` functions. When you have ambiguous column names, you can use model names instead of tables. There are also some meta aliases for each model that are available as the name of the field. Also if you want use a SQL Function for the method you can just write it in uppercase, Jerry will figure out the details.

	Jelly::query('client')->where('client.title', '=', 'Patrik');  
	// SELECT clients.* FROM clients WHERE clients.title = 'Patrick'

	Jelly::query('client')->where('client.:name_key', '=', 'Patrik');
	// SELECT clients.* FROM clients WHERE clients.title = 'Patrick'

	Jelly::query('client')->where('client.:primary_key', '=', 10);
	// SELECT clients.* FROM clients WHERE clients.id = 10

	Jelly::query('client')->where('SUBSTR(client.:name_key, 4)', '=', 'noon');
	// SELECT clients.* FROM clients WHERE SUBSTR(clients.title, 4) = 'noon'

The available meta aliases in Jerry are

* :primary_key - usually the table's id field
* :name_key - the field named "name" if not otherwise specified in the `initialize()` method of the Model
* :foreign_key - "{model_name}_id" field if not otherwise specified in the `initialize()` method of the Model
* :unique_key - the field that uniquely identifies the model based on the value

:unique_key is a bit more tricky. It tries to guess the field you need to search for based on the value itself. If it's a numeric value - then it will use :primary_key, but if it's a normal string, it will use the :name_key. 

	Jelly::query('client')->where('client.:unique_key', '=', 10);
	// SELECT clients.* FROM clients WHERE clients.id = 10

	Jelly::query('client')->where('client.:unique_key', '=', 'Patrik');
	// SELECT clients.* FROM clients WHERE clients.name = 'Patrick'

That in itself is quite neat. However, internally this method uses the `unique_key()` method of the `Jelly_Builder` that could be extended by your application for every `Jelly_Model`. You can for example write a custom logic that searched by email if the value is an email or by IP if the value is by IP. This is all covered in [Writing Models & Builders](/OpenBuildings/Jerry/blob/master/guide/jelly/models-and-builders.md)

For operators you can use all the SQL operators ('=', '!=', '>' ...). Special cases are "IN", "IS", "IS NOT", and "BETWEEN" operators

	// IN with array
	Jelly::query('client')->where('client.id', 'IN', array(1, 2, 3));
	// SELECT clients.* FROM clients WHERE clients.id IN array(1, 2, 3)

	// IS and IS can use the NULL php constant to pass on NULL
	Jelly::query('client')->where('client.id', 'IS', NULL);
	// SELECT clients.* FROM clients WHERE clients.id IS NULL

	// IS and IS NOT can use the NULL php constant to pass on NULL
	Jelly::query('client')->where('client.id', 'IS NOT', NULL);
	// SELECT clients.* FROM clients WHERE clients.id IS NOT NULL

	// BETWEEN uses an array for the boundaries
	Jelly::query('client')->where('client.id', 'BETWEEN', array(1, 100));
	// SELECT clients.* FROM clients WHERE clients.id BETWEEN 1 AND 100


### or_where()

When you want to add an OR SQL statement, you can use the `or_where()` method. What it does is simply adds your constraint with and SQL OR. 

	Jelly::query('client')
		->where('title', '=', 'Patrik')
		->or_where('price', '<', 100);    
	// SELECT clients.* FROM clients WHERE title = 'Patrick' OR price < 100

	Jelly::query('client')
		->where('title', 'LIKE', '%Pat%')
		->where('price', '<', 100)
		->or_where('title', 'LIKE', 'Admin%');   
	// SELECT clients.* FROM clients WHERE title LIKE '%Pat%' AND price < 100 OR title LIKE 'Admin%'


> __Be careful__ Using `or_where()` can lead to unexpected results. If you have builder with some constraints already in place - adding an OR statement will OR with _all of them_. So you should consider using `where_open()` and `where_close()` to enclose statements in brackets, if the result is not what you've expected.


### where_open(), where_close(), and_where_close(), and_where_open(), or_where_open(), or_where_close()

When writing complex SQL queries, you often want to put statements in brackets to be more precise with your logic. To do this you use one of the *_open() and *_close() methods. `where_open()` is just a shortcut for `and_where_open()` and `or_where_open()` adds your whole logic block with an OR to the rest of the query.

In this example:

	Jelly::query('client')
		->where('title', 'LIKE', '%Pat%')
		->where('price', '<', 100)
		->or_where('title', 'LIKE', 'Admin%'); 
	// SELECT clients.* FROM clients WHERE title = 'Patrick' OR price < 100

If we wanted to change the logic of the query to say that 

	Jelly::query('client')
		->where('title', 'LIKE', '%Pat%')
		->where_open()
			->where('price', '<', 100)
			->or_where('title', 'LIKE', 'Admin%'); 
		->where_close()
	// SELECT clients.* FROM clients WHERE title LIKE '%Pat%' AND (price < 100 OR title LIKE 'Admin%')

### having(), and_having(), or_having(), having_open(), having_close(), and_having_close(), and_having_open(), or_having_open(), or_having_close()

When you want to add constraints to the HAVING SQL clause you can use the `having()` methods group. They act just like `where()` but the SQL appears inside HAVING

### join(), on()

When you want to join other tables to the SQL, use `join()` methods. You can join by table name, model name or a table/model and alias. To add an ON statement to the JOIN, you must use the on() method. You can also use multiple on() clauses. Jerry keeps track of the models that have been joined already and will not duplicate joins. If you want to join the same model twice with different conditions, you can use an array('model', 'alias') for the first argument. You can also perform different kinds of joins (LEFT, NATURAL ...) with the second argument of the `join()` method.

	// Normal JOIN statements
	Jelly::query('client')
		->join('order')
		->on('order.client_id', '=', 'client.id');
	// SELECT clients.* FROM clients JOIN orders ON orders.client_id = clients.id

	// JOIN statement with alias
	Jelly::query('client')
		->join(array('order', 'purchase'))
		->on('purchase.client_id', '=', 'client.id');
	// SELECT clients.* FROM clients JOIN orders as purchase ON purchase.client_id = clients.id

	// LEFT JOIN statements
	Jelly::query('client', 'LEFT')
		->join('order')
		->on('order.client_id', '=', 'client.id');
	// SELECT clients.* FROM clients JOIN orders ON orders.client_id = clients.id

	// JOIN statement ON
	Jelly::query('client')
		->join('order')
		->on('order.client_id', '=', 'client.id')
		->on('order.name', '=', 'client.name');
	// SELECT clients.* FROM clients JOIN orders ON orders.client_id = clients.id AND orders.name = clients.name


### join_association()

When you want to join with models that already have your associations defined in the model itself (with Jelly_Association entries) It is easier to use the `join_association()`. 

	Jelly::query('client')->join_association('orders')
	// SELECT clients.* FROM clients JOIN orders ON orders.client_id = clients.id

You can also chain association if you want to join deeper inside the association hierarchy. For example this will join orders of clients and items of orders.

	Jelly::query('client')->join_association(array('orders', 'items'))
	// SELECT clients.* FROM clients JOIN orders ON orders.client_id = clients.id JOIN items ON items.order_id = orders.id

To add alias on a specific join you can use associative arrays.

	Jelly::query('client')->join_association(array('orders', 'items' => 'my_items'))
	// SELECT clients.* FROM clients JOIN orders ON orders.client_id = clients.id JOIN items ON items.order_id = orders.id

### distinct()

Add DESTINCT to to the SQL SELECT

### order_by()

Adding a ORDER BY statement is done with the `order_by()` method. The first argument is the column, the second is the direction.

When you chain order_by calls, they get added to the ORDER BY statement.

	Jelly::query('client')->order_by('title', 'DESC');
	// SELECT clients.* FROM clients ORDER BY title DESC

	Jelly::query('client')->order_by('title', 'DESC')->->order_by('id', 'ASC');
	// SELECT clients.* FROM clients ORDER BY title DESC, id ASC

### group_by()

Adding a group by statement is done with the `group_by()` method.

	Jelly::query('client')->group_by('title');
	// SELECT clients.* FROM clients GROUP BY title

	// Multiple columns
	Jelly::query('client')->group_by('title', 'id');
	// SELECT clients.* FROM clients GROUP BY title, id

### limit(), offset()

To add LIMIT and OFFSET to your query - use `limit()` and `offset()` methods

	Jelly::query('client')->limit(10)->offest(100);
	// SELECT clients.* FROM clients LIMIT 10 OFFSET 100

### select_column()

If you want to control which columns will be retrieved by the SQL - 

* $query->select_column('column');
* $query->select_column('field', 'alias');
* $query->select_column(array('column', 'column2', '...'));

	Jelly::query('client')->select_column(array('name', 'id'));
	// SELECT clients.name, clients.id FROM clients LIMIT 10 OFFSET 100	

	// You can use wild-cards too
	Jelly::query('client')
		->columns(array('client.*', 'order.name'))
		->join('order')
		->on('order.client_id', '=', 'client.id');
	// SELECT clients.*, order.name FROM clients JOIN orders ON orders.client_id = clients.id

### reset()

Clears all the query statements and starts building the query anew.

## Count queries

After you've built your query with the builder you have the option of querying the total number of records this query will return. This is done with the `count()` method. It constructs an SQL COUNT() query that matches your builder constraints and returns an integer.

	Jelly::query('client')->where('client.title', '=', 'Patrik')->count();  
	// SELECT COUNT(clients.*) FROM clients WHERE clients.title = 'Patrick'

## Update queries

If you want to skip validation or want to perform a complex SQL update this is possible with the value(), set() and update() methods

You basically create your query as usual - all the `join()`, `where()` and `having()` statements work as expected, but the you set the value to be updated on those records with `value('column_name', 'value')` or if you want to update multiple values you use `set(array('column_name' => 'value'))` and then run the `update()` method.

	Jelly::query('client')->where('client.title', '=', 'Patrik')->value('title', 'Maverik')->update(); 
	// UPDATE clients SET title = 'Maverik' WHERE title = 'Patrik'

## Insert queries

If you want to insert new records to tables that don't have models, if you want to skip validation or if you need a complex query for the insertion. `Jelly_Builder` can help you with that.

### Inserting a single record

You can use `set()` for multiple column => value pairs or `value()` for a single 'key', 'value' pair.

	Jelly::query('client')->set(array('client.title' => 'Patrik', 'username' => 'patrik76'))->insert()
	// INSERT INTO clients SET title = 'Patrik', username = 'patrik76'

### Inserting multiple records

You can also set them with `columns()` and `values()` methods. But there's a twist - you can insert multiple rows this way, if you pass multiple arrays to `values()`

	Jelly::query('client')->columns('title', 'username')->values(array('Patrik', 'patrick76'));
	// INSERT INTO clients(title, username) VALUES ('Patrik', 'patrik76');

	// Insert multiple rows
	Jelly::query('client')->columns('title', 'username')->values(array('Patrik', 'patrick76'), array('Martin', 'martin87'));
	// INSERT INTO clients(title, username) VALUES ('Patrik', 'patrik76'), ('Martin', 'martin87');

### Insert Select

You can also perform INSERT ... SELECT queries with Jelly_Builder. This is a bit more tricky but here it goes:

	Jelly::query('client')
		->columns('title', 'username')
		->select_column(array('order.name', 'order.id'));
		->from('order')
		->where('order.price', '=', 1);

	// INSERT INTO clients(title, username) SELECT orders.name, orders.id FROM orders WHERE orders.price = 1;


## Delete queries

You can delete all the records matched in a query by simply calling `delete()` on the builder 

	Jelly::query('client')->where('client.title', 'LIKE', 'Pat%')->delete();
	// DELETE FROM clients WHERE clients.title LIKE 'Pat%'


## Extending Jelly_Builder on the fly

`Jelly_Builder` has a method extend() which can be used to add methods to it on the fly. You can use it in various behaviors, modules and extensions to add functionality to the builder. 

	$builder = Jelly::query('client');

	$builder->extend('small', function($builder){
		$builder->where('price', '<', 10);
	});

	$builder->small();

> __Be Careful__ Using extend() is the least preferable way to extend your model as its more magic and different code intelligence tools cannot present information about those methods to you. There are other methods to add classes to the builder that are more straightforward and will nod be such a surprise to an unexpected user of your code. You can read up on that in the [Extending Jerry](/OpenBuildings/Jerry/blob/master/guide/jelly/extending-jelly.md)


## Adding unmapped data

Sometimes you want to store arbitrary data on the builder that will be passed on to future requests, usually used in behaviors. You can achieve this with the `params()` method. Its basically a getter / setter on an array data store - nothing more.

	$builder = Jelly::query('client');
	$builder->params('some_value', 10);
	$builder->params(array('other_value' => 40));

	echo $builder->params('some_value');         // 10
	echo $builder->params();                     // array('some_value' => 10, 'other_value' => 40)




	


