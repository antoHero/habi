<?php

namespace App\Interfaces;

interface CategoryRepositoryInterface {
    public function createCategory(array $categoryInfo);
    public function getAllCategories();
    public function category($category);
    public function updateCategory($categoryId, array $categoryInfo);
    public function deleteCategory($categoryId);
}