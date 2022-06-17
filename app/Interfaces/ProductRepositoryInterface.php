<?php

namespace App\Interfaces;

interface ProductRepositoryInterface {

    //methods for product
    public function createApparel(array $apparelInfo);
    public function getAllApparels();
    public function apparel($apparel);
    public function updateApparel($apparelSlug, array $apparelInfo);
    public function deleteApparel($apparelSlug);

    //methods for product attributes
    public function addNewAttribute(array $attribute);
    public function attributes($productId);
    public function attribute($id);
    public function updateAttribute($id, array $updateInfo);
}
