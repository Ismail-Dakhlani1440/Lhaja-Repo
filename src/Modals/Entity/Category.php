<?php
class Category
{
    private  $id;
    private  $title;

    public function __construct( $title,  $id = null)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public function getid(){
        return $this->id;
    }
    public function gettitle(){
        return $this->title;
    }
    public function setid($id){
        $this->id = $id;
    }
    public function settitle($title){
        $this->title = $title;
    }


}
