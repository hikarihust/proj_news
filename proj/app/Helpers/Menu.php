<?php
namespace App\Helpers;

use App\Models\CategoryModel as CategoryModel;

class Menu {
    public static function listCategories() {
        $itemsCategory = null;
        $categoryModel = new CategoryModel();
        $itemsCategory = $categoryModel->listItems(null, ['task' => 'news-list-items']);

        return $itemsCategory;
    }
}
