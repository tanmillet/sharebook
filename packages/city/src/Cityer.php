<?php
namespace LucasCity\CityPusher;

use Illuminate\Support\Facades\Cache;
use LucasCity\CityPusher\Models\CodeLibrarie;

/**
 * Created by PhpStorm.
 * Author Terry Lucas
 * Date 17.11.28
 * Time 15:11
 */
final class Cityer
{

    const CACHE_MINUTES = 1 * 24 * 60;

    /**
     * @author Terry Lucas
     * @return mixed
     */
    public static function getCity($province_id = 0)
    {
        return Cache::remember(base64_encode($province_id), Cityer::CACHE_MINUTES, function () use ($province_id) {
            return CodeLibrarie::where('node_isuse', 1)->where('parent_node_code', $province_id)->select('node_name',
                'node_code')->get();
        });
    }
}