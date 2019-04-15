<?php
/**
 * Created by PhpStorm.
 * User: brady
 * Date: 2019/4/10
 * Time: 14:10
 * 测试父类和子类都有同样的方法，继承后，父类里面调用self或者$this 是调用谁的方法
 */

class Base
{
    public static function getInstance()
    {
        return 'parent instance';
    }

    public function getIns()
    {
        return self::getInstance();
    }
    public function getName()
    {
        return 'hello name';
    }

    public function getMessage()
    {
        return $this->getName();
    }
}

class Test extends Base
{
    public function getName()
    {
        return "我是子类的getName";
    }

    public static function getInstance()
    {
        return 'child instance';
    }
}

$test = new Test();
$res = $test->getMessage();
var_dump($res);

$res = Test::getInstance();
var_dump($res);