<?php

namespace App\Mappers;

use App\Modals\Repositories\Implementations\BaseRepo;
use App\Modals\Repositories\Implementations\CategoryRepo;
use App\Mappers\SkillMapper;

class SkillRepo extends BaseRepo
{
    private $categoryRepo;
    private static $table = 'skills';
    public function __construct($categoryRepo)
    {
        parent::__construct(self::$table);
        $this->categoryRepo = $categoryRepo;
    }

    public function fetchAll()
    {
        $skills = [];
        $rows = parent::fetchAll();
        foreach ($rows as $row) {
            $skills[] = SkillMapper::map($row, $this->categoryRepo->fetchByProperty('id', $row['categoryId']));
        }
        return $skills;
    }

    public function fetchByProperty($property, $value)
    {
        $rows = parent::fetchByProperty($property, $value);
        if (is_array($rows[0])) {
            $skills = [];
            foreach ($rows as $row) {
                $skills[] = SkillMapper::map($row, $this->categoryRepo->fetchByProperty('id', $row['categoryId']));
            }
        } else {
            $skills = [SkillMapper::map($rows, $this->categoryRepo->fetchByProperty('id', $rows['categoryId']))]; 
        }
        return $skills;
    }

    public function insert($object)
    {
        $data = SkillMapper::reverseMap($object);
        parent::insert($data);
    }

    public function edit($id, $object)
    {
        $data = SkillMapper::reverseMap($object);
        parent::edit($id, $data);
    }

    public function delete($id)
    {
        parent::delete($id);
    }
}