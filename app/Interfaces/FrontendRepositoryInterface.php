<?php

namespace App\Interfaces;

interface FrontendRepositoryInterface {
  public function getAllProducts();
  public function getLatestProducts();
  public function womenArea();
  public function menArea();
  public function shop();
}
