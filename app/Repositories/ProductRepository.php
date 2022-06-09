<?php 

namespace App\Repositories;
use App\Models\{Product, ProductAttribute};
use App\Interfaces\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface {

    //implemented methods for product
    public function createApparel(array $apparelInfo) {
        return Product::create($apparelInfo);
    }

    public function getAllApparels()
    {
        return Product::orderBy('created_at', 'desc')->get();
    }

    public function apparel($apparelSlug)
    {
        return Product::whereSlug($apparelSlug)->first();
    }

    public function updateApparel($apparelSlug, array $apparelInfo)
    {
        return Product::whereSlug($apparelSlug)->update($apparelInfo);
    }

    public function deleteApparel($apparelSlug)
    {
        return Product::destroy($apparelSlug);
    }

    //iplemented methods for product attributes
    public function addNewAttribute(array $attribute)
    {
        return ProductAttribute::create($attribute);
    }
}