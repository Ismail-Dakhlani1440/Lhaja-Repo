<?php

namespace App\Modals\Entity;

class Postulation
{
    private $candidat;
    private $poste;
    private $motif;
    private $status;
    private $datePostulation;

    public function __construct(
        $candidat,
        $poste,
        $motif,
        $status = "pending",
        $datePostulation = ""
    ) {
        $this->candidat = $candidat;
        $this->poste = $poste;
        $this->motif = $motif;
        $this->status = $status;
        $this->datePostulation = $datePostulation;
    }

    public function getCandidat(){
        return $this->candidat;
    }
    public function getPoste(){
        return $this->poste;
    }
    public function getMotif(){
        return $this->motif;
    }
    public function getStatus(){
        return $this->status;
    }
    public function getDatePostulation(){
        return $this->datePostulation;
    }

    public function setCandidat($candidat){
        $this->candidat = $candidat;
    }
    public function setPoste($poste){
         $this->poste = $poste;
    }
    public function setMotif($motif){
            $this->motif = $motif;
    }
    public function setStatus($status){
         $this->status = $status;
    }
    public function setDatePostulation($datePostulation){
          $this->datePostulation = $datePostulation;
    }
}