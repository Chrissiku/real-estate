<?php
namespace App\Core;

use PDO;
use PDOStatement;

class QueryBuilder
{

    private $fields = ['*'];

    private $from;

    private $order = [];

    private $where;

    private $limit;

    private $offset;

    private $page;

    private $params = [];

    public function select (...$fields): self
    {
        if(is_array($fields[0])) {
            $fields = $fields[0];
        }

        if($this->fields === ['*']) {
            $this->fields = $fields;
        } else {
            $this->fields = array_merge($this->fields, $fields);
        }
        return $this;
    }

    public function from (string $table, string $alias = null): self
    {
        $this->from = is_null($alias) ? "$table" : "$table $alias";
        return $this;
    }

    public function where (string $where): self
    {
        $this->where = $where;
        return $this;
    }

    public function orderBy (string $column, string $direction = ''): self
    {
        $direction = strtoupper ($direction);
        if(!in_array($direction, ['ASC', 'DESC'])) {
            $this->order[] = $column;
        } else {
            $this->order[] = "$column $direction";
        }
        return $this;
    }

    public function limit (int $limit): self
    {
        $this->limit = $limit;
        return $this;
    }

    public function offset (int $offset): self
    {
        $this->offset = $offset;
        return $this;
    }
    
    public function page (int $page): self
    {
        return $this->offset(($this->page - 1) * $this->limit);
    }

    public function toSQL ()
    {
        $fields = implode(', ', $this->fields); 
        
        $sql = "SELECT {$fields} FROM {$this->from}";

        if($this->where) {
            $sql .= "  WHERE {$this->where}";
        }

        if(!empty($this->order)) {
            $sql .= ' ORDER BY ' . implode(', ', $this->order);
        }

        if($this->limit > 0) {
            $sql .= " LIMIT {$this->limit}";
        }

        if(!is_null($this->offset)) {
            $sql .= " OFFSET {$this->offset}";
        }

        return $sql;
    }

    public function setParam (string $key, $value)
    {
        $this->params[$key] = $value;
    }

    public function fetch (PDO $pdo, string $field = null)
    {
        $query = $pdo->prepare($this->toSQL());
        $query->execute($this->params);
        $result = $query->fetch();

        if($result === false) return null;

        if(!is_null($field)) {
            return $result[$field] ?? null;
        }
        return $result;
    }

    public function fetchAll (PDO $pdo)
    {
        $query = $pdo->prepare($this->toSQL());
        $query->execute($this->params);
        $results = $query->fetchAll();

        if($results === false) return null;
        return $results;
    }

}

