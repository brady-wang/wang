<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2019/4/10
 * Time: 14:00
 */

namespace App;


class Db implements Base
{
    private static $instance;
    public function index()
    {

    }
    private function __construct()
    {

    }

    public static function getInstance()
    {
        var_dump(self::$instance);
        if(self::$instance == null){
            self::$instance = new self;
        }
        return self::$instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}