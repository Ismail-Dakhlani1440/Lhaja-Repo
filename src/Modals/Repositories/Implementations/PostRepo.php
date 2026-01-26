<?php

namespace App\Modals\Repositories\Implementations;

use App\Modals\Repositories\Implementations\BaseRepo;
use App\Modals\Repositories\Implementations\CategoryRepo;
use App\Modals\Repositories\Implementations\userRepo;
use App\Mappers\PostMapper;

class PostRepo extends BaseRepo
{
    private $categoryRepo;
    private $userRepo;
    private static $table = "posts";
    public function __construct($categoryRepo, $userRepo)
    {
        parent::__construct(self::$table);
        $this->categoryRepo = $categoryRepo;
        $this->userRepo = $userRepo;
    }

    public function fetchAll()
    {
        $posts = [];
        $rows = parent::fetchAll();
        foreach ($rows as $row) {
            $posts[] = PostMapper::map($row, $this->categoryRepo->fetchByProperty('id', $row['categoryId']), $this->userRepo->fetchByProperty('id', $row['userId']));
        }
        return $posts;
    }

    public function fetchByProperty($property, $value)
    {
        $rows = parent::fetchByProperty($property, $value);
        $posts = [];
        foreach ($rows as $row) {
            $posts[] = PostMapper::map($row, $this->categoryRepo->fetchByProperty('id', $row['categoryId']), $this->userRepo->fetchByProperty('id', $row['userId']));
        }
        return $posts;
    }

    public function insert($object)
    {
        $data = PostMapper::reverseMap($object);
        parent::insert($data);
    }

    public function edit($id, $object)
    {
        $data = PostMapper::reverseMap($object);
        parent::edit($id, $data);
    }

    public function delete($id)
    {
        parent::delete($id);
    }
}