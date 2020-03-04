<?php

abstract class DataBase {

private static $server = 'localhost';
private static $db = 'ventas_comerciales';
private static $user = 'exUd6';
private static $password = 'exud6';
private static $port=3307;

public static function connectDataBase() {
    try {
        $connection = new PDO("mysql:host=".self::$server.";dbname=".self::$db.";port=".self::$port.";charset=utf8", self::$user, self::$password);
    } 
    catch (PDOException $e) {
        echo "No se ha podido establecer conexión con el servidor de bases de datos.<br>";
        die ("Error: " . $e->getMessage());
    }
    return $connection;
}


} 
    ?>