<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ApiTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $filesPaths = storage_path('app//city');
        foreach (glob($filesPaths.'/*json') as $file) {
            dump("文件名称:".$file);
            $contents = file_get_contents($file);
            dump("准备入库 内容 :".$contents);
            $parentCode = basename($file, '.json');
            $datas = json_decode($contents);
            if (empty($datas) || count($datas) < 1) {
                continue;
            }
            $temp = [];
            foreach ($datas as $key => $data) {
                $temp[] = [
                    'node_code'        => $key,
                    'node_name'        => $data,
                    'parent_node_code' => $parentCode,
                    'node_isuse'       => 1,
                    'updated_at'       => date('Y-m-d H:i:s', time()),
                    'created_at'       => date('Y-m-d H:i:s', time()),
                ];
            }
            dump("开始入库");
            //开启事务
            DB::beginTransaction();
            try {
                DB::table('sync_new_code_library')->insert($temp);
                DB::commit();
            } catch (\Exception $exception) {
                dump("文件名称 -- ".$parentCode.$exception->getMessage());
                DB::rollBack();
                break;
            }
            dump("结束入库");
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
