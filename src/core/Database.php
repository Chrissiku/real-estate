<?php
namespace App\Core;

use PDO;
use PDOException;
use PDOStatement;

class Database
{

    private $db_name;
    private $db_host;
    private $db_port;
    private $db_user;
    private $db_password;
    private PDO $pdo;

    public function __construct(
        string $db_name,
        string $db_host     = 'localhost',
        int    $db_port     = 3306,
        string $db_user     = 'root',
        string $db_password = ''
    )
    {
        $this->db_name     = $db_name;
        $this->db_host     = $db_host;
        $this->db_port     = $db_port;
        $this->db_user     = $db_user;
        $this->db_password = $db_password;

        try {
            $this->pdo = new PDO("mysql:dbname={$this->db_name};host={$this->db_host}", $this->db_user, $this->db_password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('Error : '. $e->getMessage());
        }
    }

    public function query (string $query, $params = []): PDOStatement|bool
    {
        if(empty($params)) {
            $req = $this->pdo->query($query);
        } else {
            $req = $this->pdo->prepare($query);
            $req->execute([$params]);
        }
        return $req;
    }

    public function getInstance ()
    {
        return $this->pdo;
    }

}
