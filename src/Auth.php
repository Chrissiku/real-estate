<?php
namespace App;

use App\Core\QueryBuilder;
use App\Core\Session;
use App\Helpers\GlobalHelpers;
use PDO;

class Auth
{

    private array $config = [
        'errors' => [
            'not_found_user' => 'User Not Found',
            'restriction_msg' => 'You are not allowed to access this page',
            'insertion_error' => 'Data insertion error'
        ],
        'success' => [
            'connected' => 'User Connecte Successfully'
        ]
    ];

    private Session $session;

    public function __construct(Session $session, array $config = [])
    {
        $this->config = array_merge($this->config, $config);
        $this->session = $session;
    }

    public function register (
                        PDO $pdo, 
                        QueryBuilder $queryBuilder,
                        string $table,
                        array $columns,
                        array $params
                    )
    {
        $res = $queryBuilder->insert($pdo, $table, $columns, $params);
        if(!$res) {
            $this->session->setFlash('danger', $this->config['errors']['insertion_error']);
            return false;
        }
        return true;
    }

    public function login (PDO $pdo, QueryBuilder $queryBuilder, string $username, string $password)
    {
        $user = $queryBuilder->select('*')
                              ->from('user')
                              ->where('username =:username')
                              ->setParam('username', $username)
                              ->fetch($pdo);

        if(!$user) return null;

        if(password_verify($password, $user->password)) {
            $this->connect($user);
            return $this->user();
        }
    }

    private function connect ($user)
    {
        $this->session->write('auth', $user);
    }

    public function user ()
    {
        return !$this->session->read('auth') ? false : $this->session->read('auth');
    }

    public function disconnect ()
    {
        unset($_SESSION['auth']);
    }

    public function restriction ()
    {
        if(!$this->session->read('atuh')) {
            $this->session->setFlash('danger', $this->config['errors']['restriction_msg']);
            GlobalHelpers::redirect('login');
            exit();
        }
    }
}