<?php

namespace App\Mappers;

use App\Modals\Entity\Post;

class PostMapper
{
    public static function map($row, $category,$recruteur)
    {
        return new Post($row, $category,$recruteur,$row['lieu'], $row['mission'], $row['salaire'], $row['id']);
    }

    public static function reverseMap($post) {
        return [
            'position' => $post->getPosition(),
            'category' => $post->getCategory()->getId(),
            'recruteur' => $post->getRecruteur()->getId(),
            'lieu' => $post->getLieu(),
            'mission' => $post->getMission(),
            'salaire' => $post->getSalaire()
        ];
    }
}