<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2019/4/10
 * Time: 9:50
 */

//function __autoload($class_name) {
//    $file = $class_name.".php";
//   if(is_file($file)){
//       include($file);
//   }
//}
//
//$user = new UserService();
//var_dump($user);


//function __autoload($class_name) {
//    echo '__autload class:', $class_name, '<br />';
//}
//function classLoader($class_name) {
//    echo 'SPL load class:', $class_name, '<br />';
//}
//spl_autoload_register('classLoader');
//new Test();//结果：SPL load class:Test



//class CalssLoader
//{
//    public static function loader($classname)
//    {
//        $class_file = strtolower($classname).".php";
//        if (file_exists($class_file)){
//            require_once($class_file);
//        }
//    }
//}
// 方法为静态方法
require_once 'App/CalssLoader.php';
spl_autoload_register('\App\CalssLoader::loader',false);

//$arr = spl_autoload_functions();
//print_r($arr);

//$test = new \App\Test();
//$test->index();
//$user = new UserService();
$db =  \App\Db::getInstance();
\App\Db::getInstance();
\App\Db::getInstance();





