<?php

require_once(BASE_SERVER.'/app/config/config.php');

class Model {

    private $db;

    function __construct()
    {
        $this->db = $this->create_connection();
    }

    public function create_connection() {

        global $config;

        // Atencion: Modificar esto segun la instalacion:
        $host = $config['host'];
        $userName = $config['userName'];
        $password = $config['password'];
        $database = $config['database'];
        $port = $config['port'];


        try {
            $dsn = "pgsql:host=$host;port=$port;dbname=$database;";
        
            $db = new PDO($dsn, $userName, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        } catch (Exception $e) {
            echo('ERROR: ');
            var_dump($e);
        }

        return $db;
    }

    public function getDb() {
        return $this->db;
    }
}