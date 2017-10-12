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

Route::get(
    '/',
    function () {
        return view('welcome');
    }
);

Route::namespace('Admin')->prefix('admin')->group(
    function ($router) {
        // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
        $router->get('/', 'IndexController@index');
        $router->get('/table', 'IndexController@table');
        $router->match(['get', 'post'], '/login', 'IndexController@login');
    }
);

