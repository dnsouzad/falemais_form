<?php

class Connection{
    private static $conn;
    
    public static function getConnection(){
        try {
            if (self::$conn == null) {
                self::$conn = new PDO("mysql: host=<seu host>; dbname=<seu db>;", "<seu_user>", "<sua_senha>");
            }
            return self::$conn;
        } catch (PDOException $e) {
            echo "Falha na Conexão ".$e->getMessage();
        }
    }
}