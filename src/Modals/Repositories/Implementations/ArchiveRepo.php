<?php

namespace App\Modals\Repositories\Interfaces;

use App\Modals\Repositories\Implementations\BaseRepo;
use App\Mappers\ArchiveMapper;

class ArchiveRepo extends BaseRepo
{
    private static $table = "Archive";

    public function __construct()
    {
        return parent::__construct(self::$table);
    }
}