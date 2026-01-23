<?php

namespace App\Modals\Repositories\Implementations;

use App\Modals\Repositories\Implementations\BaseRepo;
use App\Mappers\RoleMapper;

class RoleRepo extends BaseRepo
{
    private static $table = "roles";

    public function __construct()
    {
        parent::__construct(self::$table);
    }

    public function fetchAll()
    {
        $roles = [];
        $rows = parent::fetchAll();
        foreach ($rows as $row) {
            $roles[] = RoleMapper::map($row);
        }
        return $roles;
    }

    public function fetchByProperty($property, $value)
    {
        $rows = parent::fetchByProperty($property, $value);
        $roles = [];
        foreach ($rows as $row) {
            $roles[] = RoleMapper::map($row);
        }
        return $roles;
    }

    public function insert($objet)
    {
        $data = RoleMapper::reverseMap($objet);
        return parent::insert($data);
    }

    public function edit($id, $objet)
    {
        $data = RoleMapper::reverseMap($objet);
        return parent::edit($id, $data);
    }

    public function delete($id)
    {
        return parent::delete($id);
    }
}
