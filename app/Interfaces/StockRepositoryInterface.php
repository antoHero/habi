<?php

namespace App\Interfaces;

interface StockRepositoryInterface{
  public function addToStock(array $stockInfo);
}
