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

Route::namespace('Admin')->prefix('template')->group(
    function ($router) {
        // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
        $router->get('/', 'TemplateController@index');
        $router->get('/video', 'TemplateController@video');
        $router->get('/video/detail', 'TemplateController@videoDetail');
        $router->get('/table', 'TemplateController@table');
        $router->get('/profile', 'TemplateController@profile');
        $router->get('/blog', 'TemplateController@blog');
        $router->get('/form', 'TemplateController@form');
    }
);

Route::namespace('Admin')->prefix('ad')->group(
    function ($router) {
        $router->get('/geo', 'GeoController@index');
        $router->get('/geoanalyze', 'GeoController@analyze');
        $router->get('/timeline', 'IndexController@admin2Timeline');
        $router->get('/form', 'IndexController@form');
        $router->match(['get', 'post'], '/login', 'IndexController@login');

        $router->get('/users', 'UserController@index');
        $router->get('/perms', 'PermissionController@index');
        $router->get('/profile', 'ProfileController@index');
        $router->get('/apitest', 'ApiTestController@index');
        $router->get('/media', 'WidgetController@mediaManager');
        $router->get('/msg', 'WidgetController@messageOwer');
    }
);

//前端页面
Route::namespace('Front')->prefix('fr')->group(
    function ($router) {
        $router->get('/kbk', 'KoobooKController@index');
    }
);
