<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class IndexController
 * Author Terry Lucas
 * @package App\Http\Controllers\Admin
 */
class IndexController extends Controller
{
    /**
     * @author Terry Lucas
     * IndexController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @author Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin-app.index');
    }

    public function table()
    {
        return view('admin-app.table');
    }

    public function login(Request $request)
    {
        if($request->isMethod('POST')){
            return redirect('/admin/');
        }
        return view('admin-app.login');
    }
}
