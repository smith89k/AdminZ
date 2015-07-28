<?php

namespace SmithFoto\AdminZ;

use Illuminate\Support\ServiceProvider;

class AdminZServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->app->router->group(['namespace' => 'SmithFoto\AdminZ\Http\Controllers'], function()
		{
			require __DIR__.'/Http/routes.php';
		});
		
		$this->loadViewsFrom(__DIR__.'/../views', 'adminz');
		//$this->loadViewsFrom(realpath(__DIR__.'/../views'), 'adminz');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
