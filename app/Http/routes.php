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



//url 匹配,基础路由
Route::get('basic1', function () {
    return 'hello this is basic1';
});

Route::post('basic2', function () {
    return 'hello this is basic2';
});

// 多请求路由
Route::match(['get', 'post'], 'multy1', function () {
    return 'multy1';
});

Route::any('all', function () {
    return 'all';
});

// 路由参数
Route::get('user1/{id}', function ($id) {
    return 'user id =' . $id;
});

Route::get('user1/{name?}', function ($name = 'default') {
    return 'user name = ' . $name;
});

//参数匹配
Route::get('user2/{name?}', function ($name = 'default'){
   return  'check user name = ' . $name;
})->where('name', '[a-zA-Z]+');

//匹配两个参数
Route::get('user/{id}/{name?}', function($id, $name){
    return  'check user id = ' . $id . ' name =' . $name;
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// 路由别名,当URL改变的时候,函数里面的center不需要改变
Route::get('user/test-center', ['as' => 'center' ,function(){
    return route('center');
}]);

// 路由群组,批量修改路由
Route::group(['prefix' => 'member'], function(){

    Route::any('all', function () {
        return 'member-all';
    });

    Route::get('in', function () {
        return 'member-in';
    });
});

// 路由中输出视图
Route::get('view', function () {
    return view('welcome');
});

// link to controller and method
Route::get('member/info', 'MemberController@info');

Route::get('member/info2', ['uses' => 'MemberController@info2']);

Route::get('member/info33333',
    ['uses' => 'MemberController@info2',
    'as' => 'info'
]);

// add parameters and check
Route::any('member/{id}',
    ['uses' => 'MemberController@info'])
    ->where('id', '[0-9]+');;

Route::any('test1',['uses' => 'StudentController@test1']);

Route::any('query1',['uses' => 'StudentController@query1']);

// 使用查询构造器修改数据库
Route::any('query_update',['uses' => 'StudentController@query_update']);

Route::any('query_delete',['uses' => 'StudentController@query_delete']);

Route::any('query_select',['uses' => 'StudentController@query_select']);

Route::any('orm1',['uses' => 'StudentController@orm1']);
Route::any('orm2',['uses' => 'StudentController@orm2']);
Route::any('orm3',['uses' => 'StudentController@orm3']);
Route::any('orm_delete',['uses' => 'StudentController@orm_delete']);
Route::any('section1',['uses' => 'StudentController@section1']);

// 给路由起名字,方面界面等使用
Route::any('url',['as'=>'url-name',
    'uses' => 'StudentController@urlTest']);

Route::any('student/request1',['uses' => 'StudentController@request1']);



// 使用session中间件
Route::group(['middleware'=>['web']], function (){
    Route::any('session1',['uses' => 'StudentController@session1']);
    Route::any('session2',['uses' => 'StudentController@session2',
    'as'=>'session2']);
    Route::any('response',['uses' => 'StudentController@response']);
});

Route::any('activity0',['uses' => 'StudentController@before_activity1']);

// 活动页面使用中间件验证
Route::group(['middleware'=>['activity']],function (){
    Route::any('activity1',['uses' => 'StudentController@activity1']);
    Route::any('activity2',['uses' => 'StudentController@activity2']);
});


// -----------------------------

// 提供保护和session
Route::group(['middleware' => ['web']], function () {
//    // 将路由匹配到controller的方法上
//    Route::get('student/index',['uses'=>'StudentController@index']);
//    Route::any('student/create',['uses'=>'StudentController@create']);
//    Route::any('student/save',['uses'=>'StudentController@save']);
////    参数绑定
//    Route::any('student/update/{id}',['uses'=>'StudentController@update']);
//    Route::any('student/delete/{id}',['uses'=>'StudentController@delete']);
//    Route::any('student/detail/{id}',['uses'=>'StudentController@detail']);


    Route::resource('post','PostController');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



// 各个小界面
Route::get('today', 'Sport\PageController@today');
Route::get('sport', 'Sport\PageController@sport');
Route::get('compete', 'Sport\PageController@compete');
Route::get('social', 'Sport\PageController@social');

// 用户界面
Route::get('user', 'Sport\PageController@user');



// home page

// restful控制器
Route::group(['prefix' => 'admin', 'middleware' => ['web'],'namespace' => 'Admin'], function()
{
    Route::get('article/{id}','PagesController@show');

    Route::post('comment/store', 'PagesController@storeCom');

    Route::get('/', 'PagesController@index');

    Route::resource('pages', 'PagesController');
});






