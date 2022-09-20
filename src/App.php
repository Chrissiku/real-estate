<?php
namespace App;

use PDO;
use App\Core\Database;
use App\Core\Session;

class App
{

    private static $db = null;

    /**
     * defines a singleton of the Database class
     * @return Database, the new instance of the Database if not yet defined
     */
    public static function getDatabase ()
    {
        if(is_null(self::$db)) {
            self::$db = new Database('real_estate_db');
        }
        return self::$db;
    }
}
