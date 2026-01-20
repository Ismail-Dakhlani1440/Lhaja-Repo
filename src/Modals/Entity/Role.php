<?php
class Role
{
    private $id;
    private $title;

    public function __construct( $title, $id = null)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
}
