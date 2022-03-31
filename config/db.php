<?php
namespace db;

use Exception;
use PDO;

class
DB {
    public static $db;

    static function init()
    {
        try {
            self::$db = new PDO(
                'mysql:host=127.0.0.1;
                port=3306;
                dbname=allthingsheadphones;
                charset=utf8',
                'root',
                '');
        }
        catch (Exception $e) {
            return $e->getMessage();
        }

        return self::$db;
    }
}

DB::init();