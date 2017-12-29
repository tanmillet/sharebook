<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{
    //
    public function index()
    {
        return view('tan-admin.index');
    }

    public function video()
    {
        return view('tan-admin.video');
    }

    public function layout()
    {
        return view('tan-admin.temp.layout');
    }

    public function videoDetail()
    {
        // return view('tan-admin.index');
        return view('tan-admin.video-detail');
    }

    public function table()
    {
        // return view('tan-admin.index');
        return view('tan-admin.temp.table');
    }

    public function profile()
    {
        return view('tan-admin.temp.profile');
    }

    public function blog()
    {
        return view('tan-admin.temp.blog');
    }
    public function form()
    {
        return view('tan-admin.temp.form');
    }
}
