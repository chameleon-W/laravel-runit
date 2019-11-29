<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/29
 * Time: 15:21
 */

namespace ChameleonW\LaravelRunit\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
class RunitServiceProvider  extends ServiceProvider
{
    /**
     * 1.注册路由
     * 2.注册view
     */
    public function register()
    {
        $this->registerRoute();
        $this->loadViewsFrom(__DIR__."/../Resources/Views", 'runit');
    }

    public function boot()
    {

    }

    public function registerRoute()
    {
        Route::group($this->routeConfiguration(), function(){
            $this->loadRoutesFrom(__DIR__."/../Routes/route.php");
        });
    }

    public function routeConfiguration()
    {
        return [
            'namespace'  => 'ChameleonW\LaravelRunit\Http\Controllers',
            'prefix'     => 'runit',
            'middleware' => 'web'
        ];
    }
}