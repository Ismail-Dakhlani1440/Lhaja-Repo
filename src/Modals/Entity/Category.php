<?php

namespace App\Modals\Entity;

use App\Modals\Entity\Skill;

class Category
{
    private  $id;
    private  $title;
    private  $skills = [];

    public function __construct( $title,  $id = null)
    {
        $this->id = $id;
        $this->title = $title;
    }

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getSkills(){
        return $this->skills;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function addCatergoryskills($title , $category , $id = null){
        $addCategorys_skills = new Skill($this , $title , $category , $id);
        $this->skills[] = $addCategorys_skills;
        return $addCategorys_skills;
    }




}
