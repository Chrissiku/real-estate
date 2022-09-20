<?php
namespace App;

use App\Core\Database;
use App\Core\Session;

class Auth
{

    public function __construct()
    {}

    public function register ()
    {

    }

    public function login (Database $db, $username, $password)
    {
        // $db->query();
    }

    public function isLoggedIn (Session $session)
    {
        return $session->read('auth');
    }
}