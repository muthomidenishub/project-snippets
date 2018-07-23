<?php 
session_start();
//create  a config file to store data we will use 
$GLOBALS['config']= array(

'mysql'=> array(
    'host' => 'localhost',
    'username' => 'root',
    'password'=>'',
    'db'=>'cafe_db'
),
'rememberme'=> array(
'cookie_name'=>'hash',
'cookie_expiry'=>'//check the amount of time required'

),
'session'=> array(
    'session_name'=>'user'
),
);
//autoload the classes.Improve the efficiency
spl_autoload_register(function($class){
    require_once 'clasess\ '.$class.'.php';
});

require_once 'E:\Xampp\htdocs\material\functons\sanitize.php';
require_once 'E:\Xampp\htdocs\material\classes\validation.php';
require_once 'E:\Xampp\htdocs\material\classes\Config.php';
require_once 'E:\Xampp\htdocs\material\classes\DB.php';
require_once 'E:\Xampp\htdocs\material\classes\input.php';
set_include_path(get_include_path() . PATH_SEPARATOR . 'E:\Xampp\htdocs\material');
#set_include_path(get_include_path() . PATH_SEPARATOR . 'E:/Xampp/htdocs/material');





?>