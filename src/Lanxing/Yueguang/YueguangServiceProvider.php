<?php

namespace Lanxing\Yueguang;

use Illuminate\Support\ServiceProvider;

class YueguangServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->singleton('yueguang', function ($app) {
			$config = $app['config']['session'];

			return (new YueGuang)->setDefaultPathAndDomain($config['path'], $config['domain'], $config['secure']);
		});
	}

}
