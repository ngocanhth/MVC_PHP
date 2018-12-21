<?php

// $data = [
// 	'key1'=>'value1',
// 	'key2'=>'value2'
// ];
// extract($data);
// echo "<pre>";
// var_dump($key1);
// echo "</pre>";
// var_dump($key2);
// exit();

define('BASE_PATH', __DIR__);
define('APP_PATH', BASE_PATH . '/app/frontend');
define('BASE_URL', 'http://127.0.0.1/BorrowBooks/');
require BASE_PATH . '/core/Common.php';
load_app();

