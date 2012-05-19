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
class Add_Auth_Schema extends Migration
{
	public function up()
	{
		$this->add_index('users', 'uniq_email', 'email', 'unique');
		$this->add_index('users', 'uniq_fb', 'facebook_id', 'unique');
		$this->add_column('users', 'logins', 'integer');
		$this->add_column('users', 'last_login', 'integer');

		$this->create_table('user_tokens', array(
		  'id' => 'integer',
		  'user_id' => 'integer',
		  'user_agent' => 'string',
		  'token' => 'string',
		  'type' => 'string',
		  'created' => 'integer',
		  'expires' => 'integer',
		));

		$this->add_index('user_tokens', 'uniq_token', 'token', 'unique');
	}
	
	public function down()
	{
		$this->drop_table('user_tokens');
		$this->remove_column('users', 'logins');
		$this->remove_column('users', 'last_login');
		$this->remove_index('users', 'uniq_email');
		$this->remove_index('users', 'uniq_fb');
	}
}
