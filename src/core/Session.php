<?php
namespace App\Core;

class Session
{
    
    private static $session = null;

    private function __construct ()
    {
        session_start();
    }

    /**
     * defines a singleton to the Session class
     * @return Session, the new instance of the Session if not yet defined
     */
    public static function getSessionInstance ()
    {
        if(is_null(self::$session)) {
            self::$session = new Session();
        }
        return self::$session;
    }

    public function setFlash (string $key, string $message): void
    {
        $_SESSION['flash'][$key] = $message;
    }

    public function hasFlash ()
    {
        return isset($_SESSION['flash']);
    }

    public function getFlash ()
    {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }

    public function read (string $key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    public function write (string $key, mixed $value): void
    {
        $_SESSION[$key] = $value;
    }

}