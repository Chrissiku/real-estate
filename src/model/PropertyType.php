<?php
namespace App\Model;

use App\App;

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

    public function getPropertyTypeById(int $id)
    {
        return $this->queryBuilder
                                ->select('name')
                                ->from('property_type')
                                ->where('id =:id')
                                ->setParam('id', $id)
                                ->fetch()->name;
    }
}