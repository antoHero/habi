<?php

namespace App\Interfaces;

interface FabricRepositoryInterface
{
  public function getAllFabrics();
  public function createNewFabric(array $stockInfo);
  public function fabric($slug);
  public function updateFabric($slug, array $updateInfo);
}
