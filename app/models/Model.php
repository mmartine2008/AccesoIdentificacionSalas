<?php

class Model {

    private $db;

    // function __construct($baseConfig)
    // {
    //     $this->db = $this->create_connection($baseConfig);
    // }

    public function create_connection($baseConfig) {

        $config = $baseConfig;

        // Atencion: Modificar esto segun la instalacion:
        $host = $config['host'];
        $userName = $config['userName'];
        $password = $config['password'];
        $database = $config['database'];
        $port = $config['port'];


        try {
            $dsn = "pgsql:host=$host;port=$port;dbname=$database;";
        
            return new PDO($dsn, $userName, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        } catch (Exception $e) {
            debug_print_backtrace();
            var_dump($e);
            die(__FILE__.":".__LINE__);
        }

    }

    public function getDb() {
        return $this->db;
    }
}