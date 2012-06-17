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
class Add_Created_At_To_Users_Also_Add_Updated_At_To_Users extends Migration
{
	public function up()
	{
		$this->add_column('users', 'created_at', 'datetime');
		$this->add_column('users', 'updated_at', 'datetime');
	}
	
	public function down()
	{
		$this->remove_column('users', 'created_at');
		$this->remove_column('users', 'updated_at');
	}
}