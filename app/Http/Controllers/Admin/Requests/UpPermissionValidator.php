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
                'auth_name' => 'required',
                'auth_url'         => 'required',
                'auth_method'         => 'required',
                'is_menu'         => 'required',
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
                'auth_name' => '菜单名称',
                'auth_url'         => '菜单标识',
                'auth_method'         => '访问方式',
                'is_menu'         => '是否是菜单',
                'is_parent'         => '菜单归属',
            ];
    }

}