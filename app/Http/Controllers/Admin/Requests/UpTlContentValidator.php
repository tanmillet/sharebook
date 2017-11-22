<?php

namespace App\Http\Controllers\Admin\Requests;

use LucasRBAC\Validator\FormRequest;

/**
 * Class UpRoleValidator
 * Author Terry Lucas
 * @package App\Http\Controllers\Admin\Requests
 */
class UpTlContentValidator extends FormRequest
{

    /**
     * @author Terry Lucas
     * @return array
     */
    public function getValidateRules()
    {
        return
            [
                'text' => 'required',
                'type_tag'  => 'required',
                'title'  => 'required',
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
                'name' => '内容信息',
                'type_tag'  => '内容类型标识',
                'title'  => '内容标题',
            ];
    }

}