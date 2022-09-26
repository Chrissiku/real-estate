<?php
namespace App\Core;

use App\App;
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

    public function isUnique ($db, string $table, string $field, string $error_msg)
    {
        $query = $db->query("SELECT FROM $table WHERE $field = ?", $field);
        $record = $query->fetch();

        if($record === false) {
            $this->errors[$field] = $error_msg; 
        }
    }

    public function isEmail (string $field, string $errorMessage)
    {
        if(!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = $errorMessage;
        }
    }

    public function isPasswordsMatched(string $field, string $errorMessage)
    {
        // some version of PHP does not support the following notation => empty($this->data[$field])
        $_field = $this->data[$field]; 
        if(empty($_field) || $_field != $this->data[$field.'_confirm']) {
            $this->errors[$field] = $errorMessage;
        }
    }

    public function isValidate (): bool
    {
        return empty($this->errors);
    }

}