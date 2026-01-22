<?php

namespace App\Modals\Repositories\Implementations;

use App\Modals\Repositories\Implementations\BaseRepo;
use App\Mappers\CategoryMapper;

class CategoryRepo extends BaseRepo
{
    private static $table = "roles";
    public function __construct()
    {
        parent::__construct(self::$table);
    }

    public function fetchAll()
    {
        $categories = [];
        $rows = parent::fetchAll();
        foreach ($rows as $row) {
            $categories[] = CategoryMapper::map($row);
        }
        return $categories;
    }

    public function fetchByProperty($property, $value)
    {
        $rows = parent::fetchByProperty($property, $value);
        if (is_array($rows[0])) {
            $categories = [];
            foreach ($rows as $row) {
                $categories[] = CategoryMapper::map($row);
            }
        } else {
            $categories = [CategoryMapper::map($rows)];
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