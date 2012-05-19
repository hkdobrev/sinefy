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
class Fix_Users_Table_Keys extends Migration
{
	public function up()
	{
		$this->execute('ALTER TABLE  `movies`.`users` ADD PRIMARY KEY (  `id` )');
		$this->execute('ALTER TABLE  `users` CHANGE  `id`  `id` INT( 11 ) UNSIGNED NOT NULL AUTO_INCREMENT');
	}
	
	public function down()
	{

	}
}
