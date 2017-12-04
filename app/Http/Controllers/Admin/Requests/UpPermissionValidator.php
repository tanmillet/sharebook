<?php

namespace App\Http\Controllers\Admin\Requests;

use LucasRBAC\Validator\FormRequest;

/**
 * Class UpRoleValidator
 * Author Terry Lucas
 * @package App\Http\Controllers\Admin\Requests
 */
class UpPermissionValidator extends FormRequest
{

    /**
     * @author Terry Lucas
     * @return array
     */
    public function getValidateRules()
    {
        return
            [
                'name' => 'required',
                'guard_name'         => 'required',
                'is_type'         => 'required',
                'is_parent'         => 'required',
            ];
    }


    /**
     * @author Terry Lucas
     * @return array
     */
    public function getValidateReturnMsg()
    {
        return
            [
                'name' => '菜单标识',
                'guard_name'         => '菜单名称',
                'is_type'         => '菜单类型',
                'is_parent'         => '菜单归属',
            ];
    }

}