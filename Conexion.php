<?php

class Conexion
{
    public static function conectar(){
        $link=new PDO(
            "mysql:host=localhost;dbname=php_mysql_crud",
            "root",
            "",
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
        );
        return $link;
    }
}