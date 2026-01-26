<?php

namespace App\Modals\Repositories\Implementations;

use App\Modals\Repositories\Implementations\BaseRepo;
use App\Mappers\CategoryMapper;
use App\Mappers\SkillMapper;
class CategoryRepo extends BaseRepo
{
    private $skillRepo;
    private static $table = "roles";
    public function __construct($skillRepo)
    {
        parent::__construct(self::$table);
    }

    public function fetchAll()
    {
        $categories = [];
        $rows = parent::fetchAll();
        foreach ($rows as $row) {
            $categorie = CategoryMapper::map($row);
            $skills = $this->skillRepo->fetchByProperty('categoryId', $row['id']);
            $categorie->setSkills($skills);
            $categories[] = $categorie;
        }
        return $categories;
    }

    public function fetchByProperty($property, $value)
    {
        $rows = parent::fetchByProperty($property, $value);
        $categories = [];
        foreach ($rows as $row) {
            $categorie = CategoryMapper::map($row);
            $skills = $this->skillRepo->fetchByProperty('categoryId', $row['id']);
            $categorie->setSkills($skills);
            $categories[] = $categorie;
        }
        
        return $categories;
    }

    public function insert($object)
    {
        $data = CategoryMapper::reverseMap($object);
        return parent::insert($data);
    }

    public function edit($id, $object)
    {
        $data = CategoryMapper::reverseMap($object);
        return parent::edit($id, $data);
    }

    public function delete($id)
    {
        return parent::delete($id);
    }
}
