<?php

namespace App\Modals\Entity;

class Skill
{
    private $id;
    private $title;
    private $category;

    public function __construct($title, $category, $id = 0)
    {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
}
