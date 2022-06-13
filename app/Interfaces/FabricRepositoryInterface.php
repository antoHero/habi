<?php

namespace App\Interfaces;

interface FabricRepositoryInterface
{
  public function getAllFabrics();
  public function createNewFabric(array $stockInfo);
}
