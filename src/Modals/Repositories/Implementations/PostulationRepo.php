<?php

namespace App\Modals\Repositories\Implementations;

use App\Modals\Repositories\Implementations\BaseRepo;
use App\Mappers\PostulationMapper;

class PostulationRepo extends BaseRepo
{
    private UserRepo $userRepo;
    private PostRepo $postRepo;
    private static $table = "postulation";
    public function __construct()
    {
        parent::__construct(self::$table);
    }

    public function fetchAll()
    {
        $Postulations = [];
        $rows = parent::fetchAll();
        foreach ($rows as $row) {
            $Postulations[] = PostulationMapper::map($row,$this->userRepo->fetchByProperty('id', $row['userId']), $this->postRepo->fetchByProperty('id', $row['postId']));
        }
        return $Postulations;
    }

    public function fetchByProperty($property, $value)
    {
        $Postulations = [];
        $rows = parent::fetchByProperty($property, $value);
        foreach ($rows as $row) {
            $Postulations[] = PostulationMapper::map($row,$this->userRepo->fetchByProperty('id', $row['userId']), $this->postRepo->fetchByProperty('id', $row['postId']));
        }
        return $Postulations;
    }

    public function insert($object)
    {
        $data = PostulationMapper::reverseMap($object);
        parent::insert($data);
    }

    public function edit($id, $object)
    {
        $data = PostulationMapper::reverseMap($object);
        parent::edit($id, $data);
    }

    public function delete($id)
    {
        parent::delete($id);
    }
}