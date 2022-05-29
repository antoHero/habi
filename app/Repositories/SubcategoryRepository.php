<?php

namespace App\Repositories;
use App\Models\SubCategory;
use App\Interfaces\SubcategoryRepositoryInterface;

class SubcategoryRepository implements SubcategoryRepositoryInterface {
    public function create_sub_category(array $subcategoryInfo) {
        return SubCategory::create($subcategoryInfo);
    }
    public function get_sub_categories() {
        return SubCategory::orderBy('created_at', 'desc')->get();
    }
    public function subcategory($slug) {
        return SubCategory::whereSlug($slug)->first();
    }
    public function update_sub_category($slug, array $subcategoryInfo) {
        return SubCategory::whereSlug($slug)->update($subcategoryInfo);
    }
    public function delete_sub_category($subcategoryId) {
        return SubCategory::destroy($subcategoryId);
    }
}