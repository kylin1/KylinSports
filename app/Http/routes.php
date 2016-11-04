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

// 各个小界面
Route::get('today', 'Sport\PageController@today');
Route::get('sport', 'Sport\PageController@sport');
Route::get('compete', 'Sport\PageController@compete');
Route::get('social', 'Sport\PageController@social');

// 用户界面
Route::get('user', 'Sport\PageController@user');


// restful控制器
Route::group(['prefix' => 'admin', 'middleware' => ['web'],'namespace' => 'Admin'], function()
{
    Route::resource('pages', 'PagesController');
});


Route::group(['middleware' => ['web']], function()
{
    Route::resource('data', 'DataController');
});




