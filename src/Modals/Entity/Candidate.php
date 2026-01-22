<?php

namespace App\Modals\Entity;

use App\Modals\Entity\User;
use App\Modals\Entity\Candidatur;
class Candidate extends User
{
    private  $minSalaire;
    private  $postulations = [];

    public function __construct(
         $name,
         $email,
         $password,
         $role,
         $minSalaire,
         $id = null
    ) {
        parent::__construct($name, $email, $password,  $role, $id);
        $this->minSalaire = $minSalaire;
    }

    public function getMinSalaire(){
        return $this->minSalaire;
    }
    public function getPostulation(){
        return $this->postulations;
    }

     public function setMinSalaire($minSalaire){
        $this->minSalaire = $minSalaire;
    }

    public function addPostulation($poste ,$motif,$status="pending",$datePostulation=null){
        $post = new Postulation($this,$poste,$motif,$status,$datePostulation);
        $this->postulations[] = $post;
        return $post;

    }
}
