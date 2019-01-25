<?php
namespace Kaleem\Contact;

use Illuminate\Support\ServiceProvider;




class ContactServiceProvider extends ServiceProvider
{

	public function boot()
	{
		
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/views','contact');
		$this->loadMigrationsFrom(__DIR__.'/database/migrations');
		$this->mergConfigFrom(__DIR__.'/config/contact.php','contact');
		$this->publishes(__DIR__.'/config/contac.php','contact.php');


	}


	public function register()
	{


	}
}