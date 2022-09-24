<?php
namespace App;

use App\Core\Database;
use App\Core\QueryBuilder;
use App\Core\Session;

class App
{

    private static $db = null;

    private static $auth = null;

    private static $queryBuilder = null;

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

    public static function getAuth ()
    {
        if(is_null(self::$auth)) {
            self::$auth = new Auth(Session::getSessionInstance());
        }
        return self::$auth;
    }

    public static function getQueryBuilder()
    {
        if(is_null(self::$queryBuilder)) {
            self::$queryBuilder = new QueryBuilder(self::getDatabase()->getInstance());
        }
        return self::$queryBuilder;
    }
}
