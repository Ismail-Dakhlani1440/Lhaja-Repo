<?php

namespace App\Modals\Repositories\Implementations;

use App\Modals\Repositories\Implementations\BaseRepo;
use App\Mappers\UserMapper;

class UserRepo extends BaseRepo
{
    private $roleRepo;
    private static $table = "users";

    public function __construct($roleRepo)
    {
        parent::__construct(self::$table);
        $this->roleRepo = $roleRepo;
    }

    public function fetchAll()
    {
        $users = [];
        $rows = parent::fetchAll();
        foreach ($rows as $row) {
            $users[] = UserMapper::map($row, $this->roleRepo->fetchByProperty('id', $row['roleId']));
        }
        return $users;
    }

    public function fetchByProperty($property, $value)
    {
        $rows = parent::fetchByProperty($property, $value);
        if (is_array($rows[0])) {
            $users = [];
            foreach ($rows as $row) {
                $users[] = userMapper::map($row, $this->roleRepo->fetchByProperty('id', $row['roleId']));
            }
        } else {
            $users = [userMapper::map($rows, $this->roleRepo->fetchByProperty('id', $rows['roleId']))];
        }
        return $users;
    }

    public function insert($objet)
    {
        $data = UserMapper::reverseMap($objet);
        return parent::insert($data);
    }

    public function edit($id, $objet)
    {
        $data = UserMapper::reverseMap($objet);
        return parent::edit($id, $data);
    }

    public function delete($id)
    {
        return parent::delete($id);
    }

}
