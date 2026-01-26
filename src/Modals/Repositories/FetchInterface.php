<?php 

namespace App\Modals\Repositories;

interface FetchInterface
{
    public function fetchAll();
    public function fetchByProperty($property, $value);
}   