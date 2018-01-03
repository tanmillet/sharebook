<?php
namespace App\Http\Controllers\Admin\Traits;

use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * Author Terry Lucas
 * Date 18.1.3
 * Time 9:42
 */
trait PermissionTrait
{

    /**
     * @author Terry Lucas
     * @param array $attributes
     * @return mixed
     */
    public function createRolePermisson(array $attributes)
    {
        $isRes = DB::table('permission_role')
            ->where('permission_id', $attributes['permission_id'])
            ->where('role_id', $attributes['role_id'])->first();

        if (!is_null($isRes)) {
            return [
                'status' => 'failed',
                'info'   => [
                    'status_code' => 400,
                    'message'     => '该角色权限已存在！',
                ],
            ];
        }

        $res = DB::table('permission_role')->insert($attributes);

        if (!$res) {
            return [
                'status' => 'failed',
                'info'   => [
                    'status_code' => 400,
                    'message'     => '权限指派失败！',
                ],
            ];
        }

        return ['status' => 'succeed'];
    }

}