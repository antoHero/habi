<?php

namespace App\Interfaces;

interface SubcategoryRepositoryInterface {
    public function create_sub_category(array $subcategoryInfo);
    public function get_sub_categories();
    public function subcategory($subcategory);
    public function update_sub_category($subcategoryId, array $subcategoryInfo);
    public function delete_sub_category($subcategoryId);
}