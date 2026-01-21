<?php
class Poste
{
    private $id;
    private $lieu;
    private $position;
    private $mission;
    private $salaire;
    private $category;
    private $skills = [];
    private $recruteur;


    public function __construct(
        $position,
        $category,
        $recruteur,
        $lieu = "",
        $mission = "",
        $salaire = 0,
        $id = null
    ) {
        $this->id = $id;
        $this->position = $position;
        $this->category = $category;
        $this->recruteur = $recruteur;
        $this->lieu = $lieu;
        $this->mission = $mission;
        $this->salaire = $salaire;
    }

    public function getId() {
        return $this->id;
    }
    public function getPoste() {
        return $this->position;
    }
    public function getCategorie() {
        return $this->category;
    }
    public function getRecruteure() {
        return $this->recruteur;
    }
    public function getLieu() {
        return $this->lieu;
    }
    public function getMission() {
        return $this->mission;
    }
    public function getSalaire() {
        return $this->salaire;
    }
    public function getSkills() {
        return $this->skills;
    }


    public function setId($id) {
         $this->id = $id;
    }
    public function setPosition($position) {
        $this->position = $position;
    }
    public function setCategorie($category) {
         $this->category = $category;
    }
    public function setRecruteure($recruteur) {
         $this->recruteur = $recruteur;
    }
    public function setLieu($lieu) {
         $this->lieu = $lieu;
    }
    public function setMission($mission) {
         $this->mission = $mission;
    }
    public function setSalaire($salaire) {
         $this->salaire = $salaire;
    }
    
    public function addskills($title , $category , $id = null) {
        $addskills = new Skills($this , $title , $category , $id);
        $this->skills[] = $addskills; 
        return $addskills;
    }


}
