<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Command_Module class to generate basic kohana constructs
 *
 * @package Kohana-Cli
 * @author Ivan K
 **/
class Command_Module extends Command
{
	const GENERATE_BRIEF = "Generate a module stup";
	const GENERATE_DESC = "Generate a module with ./kohana module:generate <module-name> Optional params are --guide and --init which will generate those stubs of the module for you";
	
	public function generate(Command_Options $options, $name)
	{
		$module_name = basename($name);
		$module_title = ucfirst(Inflector::humanize($module_name));

		if( ! is_dir(MODPATH.$name))
			mkdir(MODPATH.$name, 0777, true);

		if( ! is_dir(MODPATH.$name.DIRECTORY_SEPARATOR.'classes'))
			mkdir(MODPATH.$name.DIRECTORY_SEPARATOR.'classes', 0777, true);

		if( ! is_dir(MODPATH.$name.DIRECTORY_SEPARATOR.'config'))
			mkdir(MODPATH.$name.DIRECTORY_SEPARATOR.'config', 0777, true);

		if( ! is_dir(MODPATH.$name.DIRECTORY_SEPARATOR.'tests'))
			mkdir(MODPATH.$name.DIRECTORY_SEPARATOR.'tests', 0777, true);

		$this->set_template(
			MODPATH.$name.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.$module_name.EXT,
			'module_config'
		);

		$this->log("Generated directory structure", Command::OK);

		if( $options->has('guide') )
		{
			mkdir(MODPATH.$name.DIRECTORY_SEPARATOR.'guide'.DIRECTORY_SEPARATOR.$module_name, 0777, true);

			$this->set_template(
				MODPATH.$name.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'userguide'.EXT,
				'module_userguide_config',
				 array('{module_name}' => $module_name, '{module_title}' => $module_title)
			);

			$this->set_template(
				MODPATH.$name.DIRECTORY_SEPARATOR.'guide'.DIRECTORY_SEPARATOR.$module_name.DIRECTORY_SEPARATOR.'index.md',
				'module_userguide_index',
				 array('{module_title}' => $module_title)
			);

			$this->set_template(
				MODPATH.$name.DIRECTORY_SEPARATOR.'guide'.DIRECTORY_SEPARATOR.$module_name.DIRECTORY_SEPARATOR.'menu.md',
				'module_userguide_menu',
				 array('{module_title}' => $module_title)
			);

			$this->log("Generated guide", Command::OK);
		}
		if( $options->has('init') )
		{
			$this->set_template(
				MODPATH.$name.DIRECTORY_SEPARATOR."init".EXT,
				'module_init'
			);

			$this->log("Generated init file", Command::OK);
		}

		$this->log("Generated module $module_name in ".MODPATH.$name, Command::OK);
	}
}
