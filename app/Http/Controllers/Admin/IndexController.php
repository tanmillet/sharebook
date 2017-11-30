<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TimeLine;
use Illuminate\Support\Facades\Request;

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

    /**
     * @author Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function table()
    {
        return view('admin-app.table');
    }

    /**
     * @author Terry Lucas
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function login(Request $request)
    {
        if ($request->isMethod('POST')) {
            return redirect('/admin/');
        }

        return view('admin-app.login');
    }

    /**
     * @author Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form()
    {
        return view('admin-app.form');
    }

    /**
     * @author Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin2App()
    {
        return view('admin2-app.index');
    }

    /**
     * @author Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin2Roles()
    {
        return view('admin2-app.roles');
    }

    /**
     * @author Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin2AddRole()
    {
        return view('admin2-app.addrole');
    }

    /**
     * @author Terry Lucas
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function admin2Timeline()
    {
        $timelines = TimeLine::orderBy('ymd', 'desc')->get();
        $timelines->each(
            function ($timeline, $index) {
                if ($timeline->type_tag === 'IMG' || $timeline->type_tag === 'VIDEO') {
                    $texts = [];
                    $srcs = explode("|", $timeline->text);
                    if (!is_null($srcs) && is_array($srcs)) {
                        foreach ($srcs as $key => $src) {
                            $texts[$key] = "http://sbook.io".$src;
                        }
                        $timeline->text = $texts;
                    }
                }
                // $timeline->created_at = $this->formatDate(strtotime(date('Y-m-d', strtotime($timeline->created_at))));
            }
        );
        $timelines = collect($timelines->toArray())->groupBy('ymd');

        return view('admin2-app.timeline', compact('timelines'));
    }
}
