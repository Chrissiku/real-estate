<?php
namespace App\Core;

use App\Database;
use PDO;

class Validator
{

    private $data;

    private array $errors = [];

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    private function getField(string $field)
    {
        if(!isset($this->data[$field])) return null;
        
        return $this->data[$field];
    }

    public function isAlphaNumericSc (string $field, string $error_msg)
    {
        if(!isset($this->data[$field]) || !preg_grep('/^[a-z]$/', $this->getField($field))) {
            $this->errors[$field] = $error_msg;
        }
    }

    public function isUnique (Database $db, string $table, string $field, string $error_msg)
    {
        $query = $db->query("SELECT FROM $table WHERE $field = ?", $field);
        $record = $query->fetch();

        if($record === false) {
            $this->errors[$field] = $error_msg; 
        }
    }

    public function isEmail (string $email)
    {
        //
    }

    public function isPasswordsMatched(string $password)
    {
        //
    }

    public function isValidate (): bool
    {
        return empty($this->errors);
    }

}