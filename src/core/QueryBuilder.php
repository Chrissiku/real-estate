<?php
namespace App\Core;

use App\App;
use PDO;

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

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

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

    private function toSQL ()
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

    public function setParam (string $key, $value): self
    {
        $this->params[$key] = $value;
        return $this;
    }

    private function shift_query_prepare (PDO $pdo)
    {
        if(empty($this->params)) {
            $query = $pdo->query($this->toSQL());
        }else {
            $query = $pdo->prepare($this->toSQL());
            $query->execute($this->params);
        }
        return $query;
    }

    public function fetch (?string $field = null, $class = null)
    {
        $query = $this->shift_query_prepare($this->pdo);

        if(!is_null($class)) {
            $result = $query->fetch(PDO::FETCH_CLASS, $class);
        }else {
            $result = $query->fetch(PDO::FETCH_OBJ);
        }

        if($result === false) return null;

        if(!is_null($field)) {
            return $result->$field ?? null;
        }
        return $result;
    }

    public function fetchAll ($class = null)
    {
        $query = $this->shift_query_prepare($this->pdo);

        if(!is_null($class)) {
            $results = $query->fetchAll(PDO::FETCH_CLASS, $class);
        } else {
            $results = $query->fetchAll(PDO::FETCH_OBJ);
        }

        if($results === false) return null;
        return $results;
    }

    /**
     * clone the current object to not alter the value of $select since it can be used elsewhere after
     * this count method
     */
    public function count ()
    {
        return (int)(clone $this)->select("COUNT(id) count")->fetch('count');
    }

    public function insert (PDO $pdo, string $table, array $columns, array $params)
    {
        $columns = implode('= ?, ', $columns) . ' = ?';
        $query = $pdo->prepare("INSERT INTO $table SET $columns");
        return $query->execute($params);
    }

    public function delete (PDO $pdo, string $table, int $id)
    {
        $query = $pdo->prepare("DELETE FROM $table WHERE id = ?");
        return $query->execute([$id]);   
    }

}