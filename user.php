<?php
namespace Brady\Wang;

require_once "UserService.php";
require_once "Json.php";

use Brady\Wang\UserService;
use Brady\Wang\Json;
$user_id = 13;
$name = 'sdfs';
$res = Json::output($name,function() use($user_id){
    return UserService::getUserInfo($user_id);
});

$user = UserService::getUserInfo($user_id);
return Json::output($user);

var_dump($res);




