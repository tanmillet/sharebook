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
    public function index($id = NULL)
    {
        //
        $permissions = Permission::orderBy('created_at', "DSEC")->get();

        $perms = [];
        foreach (parserMenuTypes() as $menuType => $parserMenuType) {
            $perms[$menuType] = [];
            foreach ($permissions as $permission) {
                    if($permission->is_parent == $menuType) $perms[$menuType][] = $permission;
            }
        }
        $menu = Permission::where('id', base64_decode($id))->first();
        $menu = (is_null($menu)) ? new Permission() : $menu;

        return view('tan-admin.permission.index', compact('perms', 'menu'));
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
            'guard_name' => $validator->validateParams['auth_name'],
            'name'       => $validator->validateParams['auth_url'],
            'is_type'    => $validator->validateParams['auth_method'],
            'is_menu'    => $validator->validateParams['is_menu'],
            'is_parent'  => $validator->validateParams['is_parent'],
        ];

        try {
            $res = (isset($validator->validateParams['opid'])) ? Permission::updateOrCreate(
                [
                    'id' => base64_decode($validator->validateParams['opid']),
                ],
                $permission
            ) : Permission::create($permission);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect('/ad/perms');
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
        // $permission = (is_null($id)) ? new Permission() : Permission::where('id', base64_decode($id))->first();

        return $this->index($id);
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
