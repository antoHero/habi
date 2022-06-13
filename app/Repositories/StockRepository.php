<?php

namespace App\Repositories;

use App\Interfaces\StockRepositoryInterface;
use App\Models\Stock;

class StockRepository implements StockRepositoryInterface{
  public function addToStock(array $stockInfo)
  {
    return Stock::create($stockInfo);
  }
}
