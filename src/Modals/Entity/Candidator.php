<?php
class Candidator
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

    public function getcandidate(){
        return $this->candidat;
    }
    public function getposte(){
        return $this->poste;
    }
    public function getmotif(){
        return $this->motif;
    }
    public function getstatus(){
        return $this->status;
    }
    public function getdatepostulation(){
        return $this->datePostulation;
    }

    public function setcandidat($candidat){
        $this->candidat = $candidat;
    }
    public function setposte($poste){
         $this->poste = $poste;
    }
    public function setmotif($motif){
            $this->motif = $motif;
    }
    public function setstatus($status){
         $this->status = $status;
    }
    public function setdatepostulation($datePostulation){
          $this->datePostulation = $datePostulation;
    }
}