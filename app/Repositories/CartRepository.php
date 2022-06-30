<?php

namespace App\Repositories;
use App\Interfaces\CartRepositoryInterface;
use App\Models\Product;

class CartRepository implements CartRepositoryInterface {

  public function add($productId) {
    $product = Product::find($productId);
  }
}
