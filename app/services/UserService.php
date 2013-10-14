<?php
namespace flakron\blog\app\services;
/**
 * Class UserService
 *
 * @package flakron\blog\app\services
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
interface UserService extends AppService {

	/**
	 * Fetch user by its login
	 *
	 * @param String $login
	 * @return User
	 */
	public function fetchByLogin($login);

	/**
	 * Validate user login and password
	 *
	 * @param array $user
	 * @return boolean
	 */
	public function authenticate($user);

}