<?php

namespace App\Core;

class Model {

    private static $conexao;

    public static function getConn(){

        $password = $_ENV["database_password"];

        if(!isset(self::$conexao)){
            self::$conexao = new \PDO("mysql:host=database-fastparking.cdhapnkytszh.us-east-1.rds.amazonaws.com;port=3306;dbname=fastparking;", "admin", $password);
        }

        return self::$conexao;
    }

}
