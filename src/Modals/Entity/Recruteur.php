<?php

namespace App\Modals\Entity;

use App\Modals\Entity\User;

class Recruteur extends User
{
    private $companyName;
    private $companyDomain;
    private $posts = [];

    public function __construct(
        $name,
        $email,
        $password,
        $role,
        $companyName,
        $companyDomain,
        $id = null
    ) {
        parent::__construct($name, $email, $password, $role, $id);
        $this->companyName = $companyName;
        $this->companyDomain = $companyDomain;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function getCompanyDomain()
    {
        return $this->companyDomain;
    }
    public function getPostes()
    {
        return $this->posts;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }
    public function setCompanyDomain($companyDomain)
    {
        $this->companyDomain = $companyDomain;
    }
    public function addPost($position, $category , $lieu = "", $mission = "" , $salaire = 0 , $id = null) {
      $addpost = new Post($this , $position, $category , $lieu, $mission , $salaire , $id);
      $this->posts[]=$addpost;
      return $addpost;
    }
}
