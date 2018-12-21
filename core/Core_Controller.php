<?php

class Core_Controller {

    protected $layout;
    protected $model;
    protected $view;
    protected $helper;

    function __construct() {
       // echo "contract";
        // layout loader
        require BASE_PATH . '/core/loaders/Layout_Loader.php';
        $this->layout = new Layout_Loader;

        //var_dump(new Layout_Loader); die();

        // view loader
        require BASE_PATH . '/core/loaders/View_Loader.php';
        $this->view = new View_Loader;

        //var_dump(new View_Loader); die();

        // model loader
        require BASE_PATH . '/core/loaders/Model_Loader.php';
        $this->model = new Model_Loader;

        // helper loader
        require BASE_PATH . '/core/loaders/Helper_Loader.php';
        $this->helper = new Helper_Loader;

        // autoload model, helper
        $this->autoload();
    }

    function autoload() {
        $autoload_config = require BASE_PATH . '/config/autoload.php';

        foreach ($autoload_config as $autoload_key => $autoloads) {

            foreach ($autoloads as $autoload) {
                $this->$autoload_key->load($autoload);
            }
        }
    }

}
