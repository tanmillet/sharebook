<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Requests\UpTlContentValidator;
use App\TimeLine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TimeLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contents = TimeLine::all();

        return view('admin2-app.tlcontents', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //init validator class
        $validator = new UpTlContentValidator();
        $inputs = $validator->setValidateParams($request->all())->valid();
        if (!empty($inputs->getValidatorResMsg())) {
            return back()->withErrors($inputs->getValidatorResMsg());
        }
        //insert db init
        $tlcontent = [
            'text'     => $validator->validateParams['text'],
            'type_tag' => $validator->validateParams['type_tag'],
            'digest'   => $validator->validateParams['digest'],
            'title'    => $validator->validateParams['title'],
            'year'     => 1, //默认可以使用
            'month'    => 1, //默认可以使用
        ];

        //add new role operate
        try {
            $res = TimeLine::create($tlcontent);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect('admin2/tlcontents');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = NULL)
    {
        //
        $tlcontent = (is_null($id)) ? new TimeLine() : TimeLine::where('id', base64_decode($id))->first();

        return view('admin2-app.showtlcontent', compact('tlcontent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
