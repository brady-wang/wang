<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2019/4/10
 * Time: 10:02
 */

namespace App;


class CalssLoader
{
    public static function loader($classname)
    {
        $classname = str_replace('\\','/',$classname);
        $class_file =  realpath('./').'/'.$classname.".php";
        if (file_exists($class_file)){
            require_once($class_file);
        }
    }
}