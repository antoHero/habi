<?php

namespace App\Repositories;
use App\Models\Category;
use App\Interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface {
    public function createCategory(array $categoryInfo) {
        return Category::create($categoryInfo);
    }
    public function getAllCategories() {
        return Category::orderBy('name', 'asc')->get();
    }
    public function category($slug) {
        return Category::whereSlug($slug)->first();
    }
    public function updateCategory($slug, array $categoryInfo) {
        return Category::whereSlug($slug)->update($categoryInfo);
    }
    public function deleteCategory($categoryId) {
        return Category::destroy($categoryId);
    }
}