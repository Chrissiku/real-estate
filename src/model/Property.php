<?php
namespace App\Model;

use App\App;
use PDO;

class Property
{

    private $id;
    private $address;
    private $name;
    private $piece_detail_id;
    private $property_type_id ;
    private $description;
    private $price;
    private $isFree;

    public function __construct()
    {
        $this->queryBuilder = App::getQueryBuilder();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }


    public function getProperties(int $limit = 10)
    {
        return App::getDatabase()
                  ->query("SELECT p.*, pt.name, pd.*
                          FROM property p
                          INNER JOIN property_type pt
                          ON p.property_type_id  = pt.id
                          INNER JOIN piece_detail pd
                          ON p.piece_detail_id = pd.id 
                          WHERE p.isFree= 1
                          ORDER BY p.price ASC
                          LIMIT $limit
                        ")
                      ->fetchAll(PDO::FETCH_OBJ);
    }

}