<?php
class Condidate extends User
{
    private  $minSalaire;
    private  $maxSalaire;
    private  $postulations = [];

    public function __construct(
         $name,
         $email,
         $password,
         $role,
         $minSalaire,
         $maxSalaire,
         $id = null
    ) {
        parent::__construct($name, $email, $password,  $role, $id);
        $this->minSalaire = $minSalaire;
        $this->maxSalaire = $maxSalaire;
    }

    public function getminsalire(){
        return $this->minSalaire;
    }
    public function getmaxsalire(){
        return $this->maxSalaire;
    }
    public function getpostulation(){
        return $this->postulations;
    }

     public function setminsalire($minSalaire){
        $this->minSalaire = $minSalaire;
    }
    public function setmaxsalire($maxSalaire){
        $this->maxSalaire = $maxSalaire;
    }

    public function addpostulation($name ,  $role ,$minSalaire , $maxSalaire , $id = null){
        $post = new Candidator ($this , $name ,  $role , $minSalaire , $maxSalaire , $id);
        $this->postulations[] = $post;
        return $post;

    }
}
