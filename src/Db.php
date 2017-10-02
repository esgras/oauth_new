<?php

namespace app;

class Db
{
    private static $instance;

    public static function getPdo()
    {
        if (empty(self::$instance)) {
            $dsn = 'mysql:host=localhost;dbname=oauth;charset=utf8';
            $user = 'root';
            $password = 'asdf';
            $options = [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ];
            self::$instance = new \PDO($dsn, $user, $password, $options);
        }

        return self::$instance;
    }

    private function __construct()
    {
    }
}