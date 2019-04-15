<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2019/4/8
 * Time: 16:21
 */

namespace Brady\Wang;

class Json
{
    /**
     * Desc: 回调函数
     * Author: brady
     * @param $arr
     * @param $func
     */
    public static function output($name,$func)
    {
        if(is_callable($func)){
            $res = call_user_func($func);

        }
        return $res;
    }
}