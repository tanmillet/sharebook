<?php

//Yoblog前端页面
Route::namespace('YoBlog')->group(
    function ($router) {
        $router->get('/blogs', 'BlogController@index');
    }
);