<?php

namespace App\Providers;

use App\Support\AppInfo;
use App\Support\Contracts\AppInfoInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function boot () {
	    config()->set( 'database.connections.mysql.engine', 'InnoDB' );
	    /** @noinspection PhpParamsInspection */
	    $this->app->instance( AppInfoInterface::class, new AppInfo($this->app));
    }
}
