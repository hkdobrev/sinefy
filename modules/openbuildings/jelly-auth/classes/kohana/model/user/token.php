<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Default auth user toke
 *
 * @package	   Kohana/Auth
 * @author	   creatoro
 * @copyright  (c) 2011 creatoro
 * @license	   http://creativecommons.org/licenses/by-sa/3.0/legalcode
 */
class Kohana_Model_User_Token extends Jelly_Model {

	public static function initialize(Jelly_Meta $meta)
	{
		// Fields defined by the model
		$meta->fields(array(
			'id' => Jelly::field('primary'),
			'user_agent' => Jelly::field('string'),
			'token' => Jelly::field('string', array(
				'unique' => TRUE,
			)),
			'type' => Jelly::field('string'),
			'created' => Jelly::field('timestamp', array(
				'auto_now_create' => TRUE,
			)),
			'expires' => Jelly::field('timestamp'),
		));

		$meta->associations(array(
			'user' => Jelly::association('belongsto'),
		));
	}

	/**
	 * Handles garbage collection and deleting of expired objects.
	 *
	 * @return	void
	 */
	public function __construct($id = NULL)
	{
		parent::__construct($id);

		if (mt_rand(1, 100) === 1)
		{
			// Do garbage collection
			$this->delete_expired();
		}
	}

	public function load_values($values)
	{
		parent::load_values($values);

		if ($this->expires < time() AND $this->loaded())
		{
			// This object has expired
			$this->delete();
		}
		return $this;
	}

	/**
	 * Deletes all expired tokens.
	 *
	 * @return	Jelly
	 */
	public function delete_expired()
	{
		// Delete all expired tokens
		DB::delete($this->meta()->table())
			->where('expires', '<', time())
			->execute($this->meta()->db());

		return $this;
	}

	/**
	 * Creates a new token.
	 *
	 * @param	array  $data
	 * @return	Jelly_Model
	 */
	public function create_token(array $data = NULL)
	{
		// Create the token
		do
		{
			$token = Model_User_Token::generate_token();
		}
		while ($this->get_token($token)->loaded());

		return $this->set(
			Arr::merge(
				array(
					'token' => $token,
					'expires' => time() + Kohana::$config->load('auth.lifetime'),
				),
				(array) $data
			)
		)->save();
	}

	static public function generate_token()
	{
		return sha1(uniqid(Text::random('alnum', 32), TRUE));
	}

	/**
	 * Loads a token.
	 *
	 * @param	string	$token
	 * @return	Jelly_Model
	 */
	public function get_token($token)
	{
		return Jelly::query($this->meta()->model())->where('token', '=', $token)->find();
	}

} // End Auth User Token Model