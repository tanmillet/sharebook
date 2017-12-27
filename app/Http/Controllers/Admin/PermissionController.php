<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Requests\UpPermissionValidator;
use App\Permission;
use Illuminate\Http\Request;

class PermissionController extends ApiContr
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $permissions = Permission::orderBy('created_at', "DSEC")->get();

        // return view('admin2-app.permissions', compact('permissions'));

        return view('tan-admin.permission.index');
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
        $validator = new UpPermissionValidator();
        $inputs = $validator->setValidateParams($request->all())->valid();
        if (!empty($inputs->getValidatorResMsg())) {
            return back()->withErrors($inputs->getValidatorResMsg());
        }
        //insert db init
        $permission = [
            'guard_name' => $validator->validateParams['guard_name'],
            'name'       => $validator->validateParams['name'],
            'is_type'    => $validator->validateParams['is_type'],
            'is_parent'  => $validator->validateParams['is_parent'],
        ];

        $attributes = [
            'id' => base64_decode($validator->validateParams['permission_id']),
        ];

        // dump($attributes);die();

        //add new role operate
        try {
            $res = Permission::updateOrCreate($attributes, $permission);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect('admin2/permissions');
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
        $permission = (is_null($id)) ? new Permission() : Permission::where('id', base64_decode($id))->first();

        return view('admin2-app.upermission', compact('permission'));
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

        $role = Permission::find(base64_decode($id));
        if (is_null($role)) {
            return $this->setStatusCode(400)->responseError("操作权限菜单不存在！");
        }

        $res = Permission::destroy(base64_decode($id));

        return ($res) ? $this->setStatusCode(400)->responseError("操作权限菜单删除成功！") :
            $this->setStatusCode(400)->responseError("操作权限菜单删除失败！");
    }

    /**
     * @author Terry Lucas
     * @param $role_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dispatchPermission($role_id)
    {
        return view('admin2-app.dispatchpermission');
    }
}
