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

        $user = \Auth::loginUsingId(1);
        $user = \Illuminate\Support\Facades\Auth::user();
        /*$res = \LucasRBAC\Permission\Models\Role::create([
            'name' => '测试管理员',
            'guard_name' => 'TestAdmin',
        ]);*/
        $userRole = $user->roles->toArray();
        $role = \LucasRBAC\Permission\Models\Role::findByName($userRole[0]['name'],$userRole[0]['display_name']);
        dump($role->permissions->contains('name' , '/g/admin'));

        foreach ($role->permissions as $permission){
            dump($permission->name);
        }

        // dump($role->users);
        // dump($user->name);
        // dump(app('lucasRbac'));
        die();

        return view('welcome');
    }
);

Route::namespace('Admin')->prefix('admin')->group(
    function ($router) {
        // 在 "App\Http\Controllers\Admin" 命名空间下的控制器
        $router->get('/', 'IndexController@index');
        $router->get('/table', 'IndexController@table');
        $router->get('/form', 'IndexController@form');
        $router->match(['get', 'post'], '/login', 'IndexController@login');
    }
);
