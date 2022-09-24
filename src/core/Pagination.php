<?php
namespace App\Core;

use App\App;
use App\Helpers\URL;
use Exception;
use PDO;

class Pagination
{

    private $query;
    private $query_count;
    private $pdo;
    private $per_page;
    // This to not allowed the multiple request to the DB if we have already gotten the result
    private $items = null;

    public function __construct(
        string $query,
        string $query_count,
        ?PDO $pdo = null,  
        int $per_page = 10,  
    )
    {  
        $this->query = $query;
        $this->query_count = $query_count;
        $this->pdo = $pdo ?: App::getDatabase()->getInstance();
        $this->per_page = $per_page;
    }

    private function getCurrentPage (): int
    {
        return URL::getPositiveInt('page', 1);
    }

    private function getPages (): int
    {
        $count = (int)$this->pdo->query($this->query_count)
                                ->fetch(PDO::FETCH_NUM)[0];
        return ceil($count / $this->per_page); 
    }

    public function getItems ()
    {
        if($this->items === null) {
            $current_page = $this->getCurrentPage(); 
            
            // pages total number
            $pages = $this->getPages();

            // offset to append inside
            $offset = ($current_page - 1) * $this->per_page;
            
            if($current_page > $pages) {
                throw new Exception('Page does not exist');
            }

            $this->items = $this->pdo->query(
                    $this->query . 
                    " LIMIT {$this->per_page} 
                    OFFSET {$offset}")
                    ->fetchAll(PDO::FETCH_OBJ);
        }
        return $this->items;
    }

    public function getPreviousLink (string $link): ?string
    {
        $current_page = $this->getCurrentPage();
        if($current_page <= 1) return null;
        // put something in the link iff the $currentPage is > 2, to not have page=1 in the URL
        if($current_page > 2) $link .= '?page=' . ($current_page - 1);
        return <<<HTML
                <a  href="{$link}" class="btn btn-primary mr-auto">Previous page</a>
HTML;
    }

    public function getNextLink (string $link): ?string
    {
        $pages = $this->getPages();
        $current_page = $this->getCurrentPage();
        if($current_page >= $pages) return null;
        $link .= '?page=' . ($current_page + 1);
        return <<<HTML
                <a href="{$link}" class="btn btn-success ml-auto">Next Page</a>
HTML;
    }
}