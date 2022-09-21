<?php

use App\App;
use App\Core\Form\Form;
use App\Core\Form\TextInput;
use App\Core\Form\PasswordInput;
use App\Core\QueryBuilder;
use App\Router;

require_once dirname(__DIR__) . '/vendor/autoload.php';


$router = new Router(dirname(__DIR__) . '/views');

// $router->get('/properties', 'properties', 'home')
//        ->run();

$queryBuilder = new QueryBuilder();
$auth = App::getAuth();
$pdo = App::getDatabase()->getInstance();

// echo '<pre>';
// $user = $auth->login($pdo, $queryBuilder, 'jim01', '12345');
// $password = password_hash('12345', PASSWORD_BCRYPT);
// $res = $auth->register($pdo, $queryBuilder, 'user' ,
//        ['first_name', 'last_name', 'username', 'email', 'user_type', 'password', 'isActive'],
//        ['john', 'doe', 'johndoe22', 'johndoe@gmail.com', 1, $password, 1]
//    );

// $res = $queryBuilder->delete($pdo, 'user', 3);
// print_r($auth->user());

// echo 'Result: '. $res;
// echo '</pre>';

$form = new Form();
$form->addElement(new TextInput('username', '', 'Username'));
$form->addElement(new PasswordInput('password', '12345', 'Password'));
echo $form->render();