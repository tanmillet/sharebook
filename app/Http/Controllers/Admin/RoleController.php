<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Requests\UpRoleValidator;
use Illuminate\Http\Request;
use LucasRBAC\Permission\Models\Role;

class RoleController extends ApiContr
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = Role::orderBy('updated_at', 'DESC')->paginate(5);

        return view('tan-admin.role.index', compact('roles'));
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
        $validator = new UpRoleValidator();
        $inputs = $validator->setValidateParams($request->all())->valid();
        if (!empty($inputs->getValidatorResMsg())) {
            return back()->withErrors($inputs->getValidatorResMsg());
        }
        $role = [
            'display_name' => $validator->validateParams['role_name'],
            'name'         => $validator->validateParams['role_tag'],
        ];
        try {
            $res = (isset($validator->validateParams['opid'])) ? Role::updateOrCreate(
                [
                    'id' => base64_decode($validator->validateParams['opid']),
                ],
                $role
            ) : Role::create($role);
        } catch (\Exception $e) {
            return back()->withErrors($e->getMessage());
        }

        return redirect('ad/roles');
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
        $role = (is_null($id)) ? new Role() : Role::where('id', base64_decode($id))->first();

        return view('tan-admin.role.uprole', compact('role'));
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

        $role = Role::find(base64_decode($id));
        if (is_null($role)) {
            return $this->setStatusCode(400)->responseError("操作角色类型不存在！");
        }

        $res = Role::destroy(base64_decode($id));

        return ($res) ? $this->setStatusCode(200)->responseError("操作角色类型删除成功！") :
            $this->setStatusCode(500)->responseError("操作角色类型删除失败！");
    }
}
