<?php

namespace flakron\blog\app\providers;

use flakron\blog\app\services\impl\UserServiceImpl;
use flakron\blog\app\services\impl\ValidationService;
use Illuminate\Support\ServiceProvider;

/**
 * Class StorageServiceProvider
 *
 * @package flakron\blog\app\providers
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
class StorageServiceProvider extends ServiceProvider {

	public function register() {
		/**
		 * UserService
		 */
		$this->app->bind('flakron\blog\app\services\UserService', function() {
			return new ValidationService(new UserServiceImpl());
		});

		/**
		 * PostService
		 */
		$this->app->bind('flakron\blog\app\services\PostService', 'flakron\blog\app\services\impl\PostServiceImpl');
	}

}