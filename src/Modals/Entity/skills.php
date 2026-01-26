<?php
class Skills
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
    public function geCategory()
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
    public function seCategory($category)
    {
        $this->category = $category;
    }
}
