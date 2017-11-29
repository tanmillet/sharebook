<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Requests\UpTlTypeValidator;
use App\TimeLineType;
use Illuminate\Http\Request;

class TlTypeController extends ApiContr
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tltypes = TimeLineType::all();

        return view('admin2-app.tltypes', compact('tltypes'));
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
        $validator = new UpTlTypeValidator();
        $inputs = $validator->setValidateParams($request->all())->valid();
        if (!empty($inputs->getValidatorResMsg())) {
            return back()->withErrors($inputs->getValidatorResMsg());
        }
        //insert db init
        $tltype = [
            'name'   => $validator->validateParams['name'],
            'tag'    => $validator->validateParams['tag'],
            'status' => 1, //默认可以使用
        ];

        //add new role operate
        try {
            $res = TimeLineType::create($tltype);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect('admin2/tltypes');
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
        $tltype = (is_null($id)) ? new TimeLineType() : TimeLineType::where('id', base64_decode($id))->first();

        return view('admin2-app.showtltype', compact('tltype'));
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
        if (!isset($id)) {
            return $this->setStatusCode(400)->responseError("参数不能为空！");
        }

        $role = TimeLineType::find(base64_decode($id));
        if (is_null($role)) {
            return $this->setStatusCode(400)->responseError("操作文本类型不存在！");
        }

        $res = TimeLineType::destroy(base64_decode($id));

        return ($res) ? $this->setStatusCode(400)->responseError("操作文本类型删除成功！") :
            $this->setStatusCode(400)->responseError("操作文本类型删除失败！");
    }
}
