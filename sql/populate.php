<?php

use App\App;
use App\Core\Database;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$pdo = App::getDatabase()->getInstance();

$pdo->exec("TRUNCATE TABLE user");

$password = password_hash('12345', PASSWORD_BCRYPT);
$pdo->exec("INSERT INTO user SET first_name='jimmy', 
                                last_name='bazele', 
                                username='jim01', 
                                email='jimmy@gmail.com', 
                                user_type=1, password='" . $password ."', 
                                isActive=1
        ");

$pdo->exec("INSERT INTO user SET first_name='chris', 
                                last_name='siku', 
                                username='chris01', 
                                email='chris@gmail.com', 
                                user_type=1, password='" . $password ."', 
                                isActive=0
        ");

