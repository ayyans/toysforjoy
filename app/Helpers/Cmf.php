<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
class Cmf
{
    public static function ipaddress()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (app()->environment('local')) {
                        return $ip;
                    } else {
                        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                            return $ip;
                        }
                    }
                }
            }
        }
    } 
}
