<?php 

namespace App\Modals\Repositories\Interfaces;

interface FetchInterface
{
    public function fetchAll();
    public function fetchByProperty($property, $value);
}   