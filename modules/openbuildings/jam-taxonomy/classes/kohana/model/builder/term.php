<?php defined('SYSPATH') OR die('No direct script access.');

class Kohana_Model_Builder_Term extends Jam_Builder
{
	public function vocabulary($name)
	{
		return $this->join_association('vocabulary')->where('vocabulary.:name_key', 'IN', (array) $name);
	}

	public function find_vocabulary($name)
	{
		return $this->vocabulary($name)->select_all();
	}

	/**
	 * Get all not hidden terms
	 *
	 * @return Jam_Builder
	 */	
	public function visible($is_hidden = FALSE)
	{
		return $this->where('is_hidden', '=', $is_hidden);
	}	
}