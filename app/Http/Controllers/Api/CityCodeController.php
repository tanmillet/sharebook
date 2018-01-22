<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use LucasCity\CityPusher\Cityer;

class CityCodeController extends ApiContr
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * @author Terry Lucas
     * @param Request $request
     * @param int $oper_code
     * @return JsonResponse
     */
    public function getCity(Request $request, int $oper_code = 0): JsonResponse
    {
        if ($request->ajax()) {
            $value = Cityer::getCity($oper_code);

            return $this->setStatusCode(200)->responseSuccessData($value);
        }

        return $this->setStatusCode(500)->responseError('合理操作！谢谢！');
    }
}
