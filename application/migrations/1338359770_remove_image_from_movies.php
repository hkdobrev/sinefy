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
class Remove_Image_From_Movies extends Migration
{
	public function up()
	{
		$this->remove_column('movies', 'image');
	}
	
	public function down()
	{
		$this->add_column('movies', 'image', array( "type" => 'varchar', "limit" => '255', "default" => 'default_image.png'));
	}
}