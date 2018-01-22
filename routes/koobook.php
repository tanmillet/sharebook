<?php

//KooBook前端页面
Route::namespace('Front')->group(
    function ($router) {
        $router->get('/kbk', 'KoobooKController@index');
        $router->get('/show/{opid}/book', 'KoobooKController@show');
    }
);