<?php

namespace App\Repositories;

use App\Interfaces\FabricRepositoryInterface;
use App\Models\{Fabric, Product};
use App\Enums\{ProductEnum};

class FabricRepository implements FabricRepositoryInterface {
  public function getAllFabrics()
  {
    return Product::ofType(ProductEnum::FABRIC()->value)->get();
  }

  public function createNewFabric(array $stockInfo)
  {
    return Fabric::create($stockInfo);
  }
}
