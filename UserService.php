<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2019/4/8
 * Time: 16:22
 */

class UserService
{
    public static function getUserInfo($user_id)
    {
        return $user = ['id'=>$user_id,'name'=>'hello'];
    }
}