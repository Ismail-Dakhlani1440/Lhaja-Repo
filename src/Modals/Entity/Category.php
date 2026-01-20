<?php
class Category
{
    private  $id;
    private  $title;

    public function __construct( $title,  $id = 0)
    {
        $this->id = $id;
        $this->title = $title;
    }
}
