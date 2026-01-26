<?php 

interface FetchInterface
{
    public function fetchAll();
    public function fetchByProperty($property, $value);
}   