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
class Add_Jam_Auth_Structure extends Migration
{
	public function up()
	{
		$this->drop_table('user_tokens');
		$this->execute(
			"CREATE TABLE IF NOT EXISTS `roles` (
			`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
			`name` varchar(32) NOT NULL,
			`description` varchar(255) NOT NULL,
			PRIMARY KEY  (`id`),
			UNIQUE KEY `uniq_name` (`name`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

			INSERT INTO `roles` (`id`, `name`, `description`) VALUES(1, 'login', 'Login privileges, granted after account confirmation');
			INSERT INTO `roles` (`id`, `name`, `description`) VALUES(2, 'admin', 'Administrative user, has access to everything.');

			CREATE TABLE IF NOT EXISTS `roles_users` (
			`user_id` int(10) UNSIGNED NOT NULL,
			`role_id` int(10) UNSIGNED NOT NULL,
			PRIMARY KEY  (`user_id`,`role_id`),
			KEY `fk_role_id` (`role_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;

			CREATE TABLE IF NOT EXISTS `user_tokens` (
			`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
			`user_id` int(11) UNSIGNED NOT NULL,
			`user_agent` varchar(40) NOT NULL,
			`token` varchar(40) NOT NULL,
			`type` varchar(100) NOT NULL,
			`created` int(10) UNSIGNED NOT NULL,
			`expires` int(10) UNSIGNED NOT NULL,
			PRIMARY KEY  (`id`),
			UNIQUE KEY `uniq_token` (`token`),
			KEY `fk_user_id` (`user_id`)
			) ENGINE=InnoDB  DEFAULT CHARSET=utf8;"
		);
	}
	
	public function down()
	{
		$this->drop_table('user_tokens');
		$this->drop_table('roles');
		$this->drop_table('roles_users');
		$this->create_table('user_tokens', array( 
			'id' => array( "type" => 'int', "limit" => '11'),
			'user_id' => array( "type" => 'int', "limit" => '11'),
			'user_agent' => array( "type" => 'varchar', "limit" => '255'),
			'token' => array( "type" => 'varchar', "limit" => '255'),
			'type' => array( "type" => 'varchar', "limit" => '255'),
			'created' => array( "type" => 'int', "limit" => '11'),
			'expires' => array( "type" => 'int', "limit" => '11') 
		), array(  )); 
	}
}
