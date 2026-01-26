<?php

namespace App\Modals\Repositories\Implementations;

use App\Mappers\RoleMapper;

class RoleRepo extends BaseRepo
{
    public function __construct()
    {
        // Fix: __construct and parent::__construct
        parent::__construct("roles");
    }

    public function fetchAll()
    {
        $rows = parent::fetchAll();
        $roles = [];

        foreach ($rows as $row) {
            $roles[] = RoleMapper::map($row);
        }

        return $roles;
    }

    public function fetchByProperty($property, $value)
    {
<<<<<<< HEAD
        $row = parent::fetchByProperty($property, $value);

        if (!$row) {
            return null; // Return null if not found
=======
        $rows = parent::fetchByProperty($property, $value);
        $roles = [];
        foreach ($rows as $row) {
            $roles[] = RoleMapper::map($row);
>>>>>>> c05d7f4b896c7092c0853726dd2db5db0e631a3c
        }

        // Fix: Return the direct Object, not an array [Object]
        return RoleMapper::map($row);
    }

    public function insert($roleEntity)
    {
        // Convert Entity object -> Database Array
        $data = RoleMapper::reverseMap($roleEntity);
        return parent::insert($data);
    }

    public function edit($id, $roleEntity)
    {
        // Convert Entity object -> Database Array
        $data = RoleMapper::reverseMap($roleEntity);
        // return parent::edit($id, $data);
        return;
    }
<<<<<<< HEAD
=======

    public function delete($id)
    {
        return parent::delete($id);
    }
>>>>>>> c05d7f4b896c7092c0853726dd2db5db0e631a3c
}
