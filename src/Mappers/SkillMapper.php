<?php

namespace App\Mappers;

use App\Modals\Entity\Skill;

class SkillMapper
{
    public static function map($row, $category) {
        return new Skill($row['title'], $category, $row['id']);
    }

    public static function reverseMap($skill) {
        return [
            'title' => $skill->getTitle(),
            'category' => $skill->getCategory()->getid()
        ];
    }
}   