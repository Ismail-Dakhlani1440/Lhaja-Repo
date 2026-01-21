<?php

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
        if (is_array($rows[0])) {
            $roles = [];
            foreach ($rows as $row) {
                $roles[] = RoleMapper::map($row);
            }
        } else {
            $roles = [RoleMapper::map($rows)];
        }
        return $roles;
    }

    public function insert($objet)
    {
        $data = RoleMapper::reverseMap($objet);
        return parent::insert($data);
    }

}
