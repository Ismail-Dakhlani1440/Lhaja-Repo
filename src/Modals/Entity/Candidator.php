<?php
class Candidator
{
    private $candidatId;
    private $posteId;
    private $motif;
    private $status;
    private $datePostulation;

    public function __construct(
        $candidatId,
        $posteId,
        $motif,
        $status = "approved",
        $datePostulation = ""
    ) {
        $this->candidatId = $candidatId;
        $this->posteId = $posteId;
        $this->motif = $motif;
        $this->status = $status;
        $this->datePostulation = $datePostulation;
    }
}
