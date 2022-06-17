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

  public function fabric($slug)
  {
    return Product::ofType('FABRIC')->where('slug', $slug)->first();
    // return Fabric::where('slug',$slug)->first();
  }

  public function updateFabric($slug, array $updateInfo)
  {
    return $this->fabric($slug)->update($updateInfo);
  }
}
