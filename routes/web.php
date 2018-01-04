<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::namespace('Admin')->prefix('ad')->group(
    function ($router) {
        $router->get('/users', 'UserController@index');

        //角色操作路由
        $router->get('/roles', 'RoleController@index');
        $router->get('/show/role/{opid?}', 'RoleController@show');
        $router->post('/store/role', 'RoleController@store');
        $router->post('/destroy/role/{opid}', 'RoleController@destroy');

        //权限操作路由
        $router->get('/perms/{opid?}', 'PermissionController@index');
        $router->get('/show/auth/{opid?}', 'PermissionController@show');
        $router->post('/store/auth', 'PermissionController@store');
        $router->post('/destroy/auth/{opid}', 'PermissionController@destroy');
        $router->any('/dispatch/auth/{opid}/{perid?}/{type?}', 'PermissionController@dispatchPermission');

        $router->get('/profile', 'ProfileController@index');
        $router->get('/userpass', 'ProfileController@upUserPass');
        $router->get('/apitest', 'ApiTestController@index');
        $router->get('/media', 'WidgetController@mediaManager');
        $router->get('/msg', 'WidgetController@messageOwer');

        //测试
        $router->get('/modeltest', 'ApiTestController@testModel');
    }
);

//前端页面
Route::namespace('Front')->prefix('fr')->group(
    function ($router) {
        $router->get('/kbk', 'KoobooKController@index');
    }
);

//登录路由
Auth::routes();
