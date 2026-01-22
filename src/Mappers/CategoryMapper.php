<?php 

namespace App\Mappers;

use App\Modals\Entity\Category;

class CategoryMapper {

    public static function map($category) {
        return new Category($category['title'], $category['id']);
    }

    public static function reverseMap($category) {
        return [
            'title' => $category->getTitle()
        ];
    }
}