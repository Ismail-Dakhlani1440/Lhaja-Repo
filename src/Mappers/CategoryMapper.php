<?php 

namespace App\Mappers;

use App\Modals\Entity\Category;

class CategoryMapper {

    public static function map($row) {
        return new Category($row['title'], $row['id']);
    }

    public static function reverseMap($category) {
        return [
            'title' => $category->getTitle()
        ];
    }
}