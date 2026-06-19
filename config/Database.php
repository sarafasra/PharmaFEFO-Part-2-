<?php

class Database
{
    private static $pdo = null;

    public static function connect()
    {
        if (self::$pdo === null) {

            $host = "localhost";
            $db   = "pharmafefo2"; // مهم: نفس اسم DB ديالك
            $user = "root";
            $pass = "";

            try {

                self::$pdo = new PDO(
                    "mysql:host=$host;dbname=$db;charset=utf8",
                    $user,
                    $pass,
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                    ]
                );

            } catch (PDOException $e) {
                die("DB ERROR: " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}