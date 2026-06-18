<?php

require_once __DIR__ . '/environment.php';

class Database
{
    private static $pdo = null;

    public static function connect()
    {
        if (self::$pdo === null) {

            $host = $_ENV['DB_HOST'];
            $db   = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $pass = $_ENV['DB_PASS'];

            self::$pdo = new PDO(
                "mysql:host=$host;dbname=$db",
                $user,
                $pass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]
            );
        }

        return self::$pdo;
    }
}