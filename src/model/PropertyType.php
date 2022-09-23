<?php
namespace App\Model;

use App\App;
use App\Core\QueryBuilder;

class PropertyType
{

    private int $id;
    private string $name;
    private string $image;
    private $queryBuilder = null;
    
    public function __construct()
    {
        $this->queryBuilder = App::getQueryBuilder();
    }

    public function getId (): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getImage(): ?string 
    {
        return $this->image;
    }

    public function countPropertiesById(int $property_type_id ): ?int
    {
        return $this->queryBuilder
                                ->from('property')
                                ->where('property_type_id  =:id')
                                ->setParam('id', $property_type_id )
                                ->count();
    }
}