<?php
class Poste
{
    private $id;
    private $lieu;
    private $poste;
    private $mission;
    private $salaire;
    private $categoryId;
    private $recruteurId;

    public function __construct(
        $poste,
        $categoryId,
        $recruteurId,
        $lieu = "",
        $mission = "",
        $salaire = 0,
        $id = 0
    ) {
        $this->id = $id;
        $this->poste = $poste;
        $this->categoryId = $categoryId;
        $this->recruteurId = $recruteurId;
        $this->lieu = $lieu;
        $this->mission = $mission;
        $this->salaire = $salaire;
    }
}
