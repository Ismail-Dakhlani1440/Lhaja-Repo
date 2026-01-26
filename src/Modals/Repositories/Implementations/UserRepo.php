<?php

class UserRepo extends BaseRepo
{
    private static $table = "users";

    public function __construct()
    {
        parent::__construct(self::$table);
    }

    

}
