<?php 

class MySql {
    private static $mysql;

    function __construct(){}

    public static function getInstance(){
        if (is_null(self::$mysql)){
            $username = "root";
            $password = "root";
            self::$mysql = new PDO(
                'mysql:host=mysql:3306;dbname=promobit', 
                $username, $password
            );
            self::$mysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$mysql->exec('set names utf8');
        }
        return self::$mysql;
    }
}