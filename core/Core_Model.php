<?php

class Core_Model {
    protected $db = null;
    function __construct() {
        $this->connect();
    }
    function connect() {
        if ($this->db === null) {
            $config = require BASE_PATH . '/config/database.php';

            $host = $config['host'];
            $username = $config['username'];
            $password = $config['password'];
            $dbname = $config['dbname'];

            try {
              $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                // set the PDO error mode to exception
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->db->exec("set names utf8");
             //   echo "connection success";
            } catch (PDOException $e) {
                exit("Connection failed: " . $e->getMessage());
            }
        }
    }
}
