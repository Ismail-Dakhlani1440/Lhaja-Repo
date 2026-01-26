<?php

namespace App\Mappers;

use App\Modals\Entity\Postulation;

class PostulationMapper
{
    public static function map($row,$candidat,$post)
    {
        return new Postulation($candidat, $post, $row['motif'], $row['status'], $row['datePostulation']);
    }
    
    public static function reverseMap($postulation){
        return [
            'candidat_id' => $postulation->getCandidat()->getId(),
            'poste_id' => $postulation->getPoste()->getId(),
            'motif' => $postulation->getMotif(),
            'status' => $postulation->getStatus(),
            'datePostulation' => $postulation->getDatePostulation()
        ];
    }

}