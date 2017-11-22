<?php

namespace App\Http\Controllers\Admin\Requests;

use LucasRBAC\Validator\FormRequest;

/**
 * Class UpRoleValidator
 * Author Terry Lucas
 * @package App\Http\Controllers\Admin\Requests
 */
class UpTlTypeValidator extends FormRequest
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
                'tag'  => 'required',
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
                'name' => '内容类型名称',
                'tag'  => '内容类型标识',
            ];
    }

}