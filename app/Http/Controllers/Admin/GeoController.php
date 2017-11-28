<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LucasCurl\CurlPusher\Curler;

class GeoController extends Controller
{
    //
    public function index()
    {
        return view('geo');
    }

    public function analyze(Request $request)
    {
        $address = $request->get('address');

        $curler = new Curler();
        //run($headers, $url, $method, $body = '')
        $myParms = [
            'key'     => '3585fec74f7dd8b01d4cf6604da2573f',
            'address' => $address,
            'output'  => 'JSON',
        ];
        $postUrl = "http://restapi.amap.com/v3/geocode/geo?".http_build_query($myParms);
        $header = [
            "Accept:application/json, text/javascript, */*; q=0.01",
            "Accept-Encoding:gzip, deflate",
            "Accept-Language:zh-CN,zh;q=0.8",
            "Cache-Control:no-cache",
            "Connection:keep-alive",
            // "Content-Length:420",
            "Content-Type:application/json;charset=UTF-8",
        ];
        $res = $curler->run($header, $postUrl, 'GET');
        $res['posturl'] = $postUrl;

        return $res;
    }
}
