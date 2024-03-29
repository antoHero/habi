<?php

namespace App\Repositories;

use App\Interfaces\FrontendRepositoryInterface;
use App\Models\{Product, Category};

class FrontendRepository implements FrontendRepositoryInterface {
  public function getAllProducts()
  {
    return Product::all();
  }

  public function getLatestProducts()
  {
    return Product::orderBy('created_at', 'desc')->get();
  }

  public function womenArea()
  {
    return Category::ofSlug('women')->first();
  }

  public function menArea()
  {
    return Category::ofSlug('men')->first();
  }

  public function womenAreaByCategory($slug)
  {
    //to be implemented or removed
  }

  public function shop() 
  {
    return Product::orderBy('created_at', 'desc')->paginate(12);
  }
}
