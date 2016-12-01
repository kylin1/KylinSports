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

Route::get('/landing', 'SportController@landing');


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
    Route::get('/', 'HomeController@today');


    //各个主界面
    Route::get('/today', 'HomeController@today');
    Route::get('/sport', 'SportController@index');
    Route::get('/compete', 'CompeteController@index');
    Route::get('/friend', 'SocialController@index');

    //Restful
    Route::resource('/competition', 'CompeteController');
    Route::resource('/user', 'MyUserController');

    //个人竞赛管理
    Route::get('/my-competition', 'CompeteController@myCompete');
    Route::get('/join-compete/{cmptId}', 'CompeteController@join');
    Route::get('/withdraw-compete/{cmptId}', 'CompeteController@withdraw');
    Route::get('/cancel-compete/{cmptId}', 'CompeteController@destroy');
    Route::get('/update-compete/{cmptId}', 'CompeteController@edit');

    //社交信息
    Route::get('/group', 'SocialController@group');
    Route::get('/write-post', 'SocialController@writePost');

    Route::post('/post', 'Social\PostController@storePost');

});
