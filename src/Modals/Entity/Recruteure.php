<?php
class Recruteure extends User
{
    private $companyName;
    private $companyDomain;
    private $postes = [];

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

    public function getPostes()
    {
        return $this->postes;
    }

    public function addPost($position, $category , $lieu = "", $mission = "" , $salaire = 0 , $id = null) {
      $addpost = new Recruteure($this , $position, $category , $lieu, $mission , $salaire , $id);
      $this->postes[]=$addpost;
      return $addpost;
    }
}
