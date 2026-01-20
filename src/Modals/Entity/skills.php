<?php
class Skills
{
    private $id;
    private $title;
    private $categoryId;

    public function __construct($title, $categoryId, $id = 0)
    {
        $this->id = $id;
        $this->title = $title;
        $this->categoryId = $categoryId;
    }
}
