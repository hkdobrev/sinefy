<?php
/**
 * Local filesystem driver
 * @package    OpenBuildings/jelly-upload
 * @author     Ivan Kerin
 * @copyright  (c) 2011 OpenBuildings Inc.
 * @license    http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Upload_Server_Local extends Upload_Server
{
	function __construct($name, $config)
	{
		parent::__construct($name, $config, array('web', 'path'));
	}

	function file_exists($file)
	{
		return file_exists($this->realpath($file));
	}

	public function is_file($file)
	{
		return is_file($this->realpath($file));	
	}

	public function is_dir($file)
	{
		return is_dir($this->realpath($file));	
	}

	public function unlink($file)
	{
		$file = $this->realpath($file);

		if (is_file($file))
		{
			return unlink($file);
		}
		elseif (is_dir($file))
		{
	    return self::rrmdir($file);
		}
	}

	static public function rrmdir($path)
	{
	  return is_file($path)?
	    @unlink($path):
	    array_map('Upload_Server_Local::rrmdir',glob($path.'/*'))==@rmdir($path)
	  ;
	}	

	public function mkdir($file)
	{

		return mkdir($this->realpath($file), 0777, true);
	}

	public function rename($file, $new_file)
	{
		return rename($this->realpath($file), $this->realpath($new_file));
	}

	public function copy($file, $new_file)
	{
		return copy($this->realpath($file), $this->realpath($new_file));
	}	

	public function save_from_local($file, $local_file, $remove_file = TRUE)
	{
		$dir = dirname($file);

		if ( ! $this->is_dir($dir))
		{
			if ( ! $this->mkdir($dir))
				throw new Kohana_Exception("Cannot create dir :dir (:realdir)", array(":dir" => $dir, ':realdir' => $this->realpath($dir)));
		}

		if ( ! $this->is_writable($dir))
			throw new Kohana_Exception('Directory :dir must be writable',
				array(':dir' => $dir));

		$file = $this->realpath($file);
		
		if ($remove_file)
		{
			if (is_uploaded_file($local_file))
			{
				return move_uploaded_file($local_file, $file);
			}
			elseif (is_file($local_file))
			{
				return rename($local_file, $file);
			}
		}
		else
		{
			return copy($local_file, $file);
		}

		return FALSE;
	}

	public function copy_to_local($file, $local_file)
	{
		if ( ! is_dir(dirname($local_file)))
	    throw new Kohana_Exception(":dir must be local directory", array(":dir" => dirname($local_file)));
	    
	  return copy($this->realpath($file), $local_file);
	}

	public function move_to_local($file, $local_file)
	{
		if ( ! is_dir(dirname($local_file)))
	    throw new Kohana_Exception(":dir must be local directory", array(":dir" => dirname($local_file)));
	    
	  return rename($this->realpath($file), $local_file);
	}	

	public function read($file)
	{
		return file_get_contents($this->realpath($file));
	}	

	public function write($file, $content)
	{
		return file_put_contents($this->realpath($file), $content) !== FALSE;
	}		

	public function realpath($file)
	{
		return str_replace('\\', '/', rtrim($this->_config['path'], '/').'/'.$file);
	}

	public function webpath($file)
	{
		return rtrim($this->_config['web'], '/').'/'.$file;
	}	

	public function is_writable($file)
	{
		return is_writable($this->realpath($file));
	}
}