<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//匹配两个参数 url = http://localhost:8888/laravel/public/user/88123/name
Route::get('user/{id}/{name}', function($id, $name){
    return  'check user id = ' . $id . ' name =' . $name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

//restful注入数据接口
Route::group(['middleware' => ['web']], function()
{
    //注⼊每⽇数据
    Route::post('data/users/{uid}/dailydata','Sport\DataController@newDailyData');
    //获取每⽇数据
    Route::get('data/users/{uid}/dailydata','Sport\DataController@getDailyData');

    //注⼊每⼩时数据
    Route::post('data/users/{uid}/hourdata','Sport\DataController@newHourlyData');
    //获取⼩时数据
    Route::get('data/users/{uid}/hourdata','Sport\DataController@getHourlyData');
});

//应用路由



Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
});
