<?php

namespace App\Mappers;

use App\Modals\Entity\Admin;
use App\Modals\Entity\Recruteur;
use App\Modals\Entity\Candidate;

class UserMapper{

    public static function  map($row,$role){
        if ($role->getTitle() == 'Admin'){
            return new Admin($row['name'], $row['email'], $row['password'], $role, $row['id']);
        }else if ($role->getTitle() == 'Recruteur'){
            return new Recruteur($row['name'], $row['email'], $row['password'], $role, $row['companyName'], $row['companyDomain'], $row['id']);
        }else if ($role->getTitle() == 'Condidat'){
            return new Candidate($row['name'], $row['email'], $row['password'], $role, $row['minSalaire'], $row['id']);
        }
    }

    public static function reverseMap($user){
        if ($user instanceof Admin){
            return [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'roleId' => $user->getRole()->getId(),
            ];
        }else if ($user instanceof Recruteur){
            return [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'roleId' => $user->getRole()->getId(),
                'companyName' => $user->getCompanyName(),
                'companyDomain' => $user->getCompanyDomain(),
            ];
        }else if ($user instanceof Candidate){
            return [
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'roleId' => $user->getRole()->getId(),
                'minSalaire' => $user->getMinSalaire(),
            ];
        }
    }

}