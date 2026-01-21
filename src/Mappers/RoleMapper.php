<?php

class RoleMapper{

    public static function map($row){
        return new Role($row['id'], $row['title']);
    }

    public static function reverseMap($objet){
        return [
            'id' => $objet->getId(),
            'title' => $objet->getTitle(),
        ];
    }
}