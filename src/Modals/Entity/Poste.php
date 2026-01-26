<?php

namespace App\Modals\Entity;

class Post
{
    private $id;
    private $lieu;
    private $mission;
    private $salaire;
    private $category;
    private $skills = [];
    private $recruteur;


    public function __construct(
        $category,
        $recruteur,
        $lieu = "",
        $mission = "",
        $salaire = 0,
        $id = null
    ) {
        $this->id = $id;
        $this->category = $category;
        $this->recruteur = $recruteur;
        $this->lieu = $lieu;
        $this->mission = $mission;
        $this->salaire = $salaire;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCategorie()
    {
        return $this->category;
    }
    public function getRecruteur()
    {
        return $this->recruteur;
    }
    public function getLieu()
    {
        return $this->lieu;
    }
    public function getMission()
    {
        return $this->mission;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function getSkills()
    {
        return $this->skills;
    }


    public function setId($id)
    {
        $this->id = $id;
    }
    public function setCategorie($category)
    {
        $this->category = $category;
    }
    public function setRecruteure($recruteur)
    {
        $this->recruteur = $recruteur;
    }
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }
    public function setMission($mission)
    {
        $this->mission = $mission;
    }
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    public function addskills($title, $category, $id = null)
    {
        $skill = new Skill($this, $title, $category, $id);
        $this->skills[] = $skill;
        return $skill;
    }
}
