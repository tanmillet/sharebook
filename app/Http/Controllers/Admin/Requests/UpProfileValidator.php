<?php

namespace App\Http\Controllers\Admin\Requests;

use LucasRBAC\Validator\FormRequest;

/**
 * Class UpRoleValidator
 * Author Terry Lucas
 * @package App\Http\Controllers\Admin\Requests
 */
class UpProfileValidator extends FormRequest
{

    /**
     * @author Terry Lucas
     * @return array
     */
    public function getValidateRules()
    {
        return
            [
                'phone' => 'required',
                'wechat'         => 'required',
                'qq'         => 'required',
                'nike_name'         => 'required',
                'job_title'         => 'required',
                'intro'         => 'required',
                'gender'         => 'required',
                'address_code'         => 'required',
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
                'phone' => '电话号码',
                'wechat'         => '微信账号',
                'qq'         => 'QQ号码',
                'nike_name'         => '中文名称',
                'job_title'         => '职位名称',
                'intro'         => '个人简介',
                'gender'         => '性别',
                'address_code'         => '居住地址',
            ];
    }

}