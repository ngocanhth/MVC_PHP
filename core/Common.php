<?php

function load_app() {
     $config = require BASE_PATH . '/config/config.php';
     //var_dump($config);
     $module = !empty($_GET['module']) ? $_GET['module'] : $config['default_module'];
     //var_dump($module);
     $action = !empty($_GET['action']) ? $_GET['action'] : $config['default_action'];
       // var_dump($action); die();
     // load base controller and core controller
    require BASE_PATH . '/core/Core_Controller.php';
    require BASE_PATH . '/core/Base_Controller.php';

    // load models
    require BASE_PATH . '/core/Core_Model.php';
    require BASE_PATH . '/core/Base_Model.php';
  
     $controller = ucfirst($module) . '_Controller';
  //   var_dump($controller); die();
     $controller_path = APP_PATH . "/controllers/{$controller}.php";
    //  var_dump($controller_path);die();
    if (!file_exists($controller_path)) {
        exit("File not found $controller_path");
    }

    require $controller_path;

   // var_dump($controller_path);die();

    if (!class_exists($controller)) {
        exit("Class not found $controller");
    }

     $object = new $controller();
      // echo "<pre>";
      // var_dump($object);
      // echo "</pre>";
      // die();

    if (!method_exists($object, $action)) {
        exit("Method not found $action");
    }

     $object->$action();
}
