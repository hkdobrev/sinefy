<?php defined('SYSPATH') OR die('No direct script access.');

if ( ! class_exists('Command_DB'))
{
	Kohana::load(Kohana::find_file('command', 'db'));
}

class Command_Movies extends Command_DB {

	const LOAD_BRIEF = 'Load movies from an SQL file';

	public function load(Command_Options $options, $database = NULL)
	{
		$type = $database ?: 'default';

		$db = Kohana::$config->load("database.$type.connection");	

		if( ! isset($db['database']) )
		{
			$matches = array();
			if( ! preg_match('/dbname=([^;]+);', $db['dsn'], $matches));
				throw new Kohana_Exception("Error connecting to database, database missing");
			$db['database'] = $matches[1];
		}

		$file = $options->has('file') ? $options['file'] : 'movies.sql';

		$file = Kohana::$config->load("migrations.path").DIRECTORY_SEPARATOR.$file;

		$this->log_func("system", array(strtr("mysql -u:username -p:password :database < :file ", array(
			':username' => $db['username'],
			':password' => $db['password'],
			':database' => $db['database'],
			':file'      => $file
		))), Command::OK, "Loading data from ".Debug::path($file)." to ".$db['database']);
	}

}
