<?php

namespace App\Mappers;

use App\Modals\Entity\Role;

class RoleMapper{

    public static function map($row){
        return new Role($row['id'], $row['title']);
    }

    public static function reverseMap($role){
        return [
            'title' => $role->getTitle()
        ];
    }
}