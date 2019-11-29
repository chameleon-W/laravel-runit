<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/11/29
 * Time: 15:13
 */

Route::get('/','RunitController@index');

Route::post('/','RunitController@store')->name('runit.store');
Route::get('test','TestController@index');