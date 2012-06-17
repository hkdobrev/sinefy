<?php defined('SYSPATH') OR die('No direct script access.');
/**
* create_table($table_name, $fields, array('id' => TRUE, 'options' => ''))
* drop_table($table_name)
* rename_table($old_name, $new_name)
* add_column($table_name, $column_name, $params)
* rename_column($table_name, $column_name, $new_column_name)
* change_column($table_name, $column_name, $params)
* remove_column($table_name, $column_name)
* add_index($table_name, $index_name, $columns, $index_type = 'normal')
* remove_index($table_name, $index_name)
*/
class Add_Item_Id_To_Comments_Also_Add_Item_Model_To_Comments extends Migration
{
	public function up()
	{
		$this->add_column('comments', 'item_id', array('type' => 'INT', 'unsigned' => TRUE, 'limit' => 11));
		$this->add_column('comments', 'item_model', array('type' => 'ENUM("movie", "movies_user")', 'null' => FALSE));

		$this->add_index('comments', 'item_index', array('item_id', 'item_model'));
	}
	
	public function down()
	{
		$this->remove_index('comments', 'item_index');
		$this->remove_column('comments', 'item_id');
		$this->remove_column('comments', 'item_model');
	}
}
