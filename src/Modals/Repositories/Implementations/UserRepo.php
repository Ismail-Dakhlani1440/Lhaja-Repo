<?php

namespace App\Modals\Repositories\Implementations;

use App\Modals\Repositories\Implementations\BaseRepo;

class UserRepo extends BaseRepo
{
    private static $table = "users";

    public function __construct()
    {
        parent::__construct(self::$table);
    }

    

}
