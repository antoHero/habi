<?php

namespace App\Interfaces;

interface FrontendRepositoryInterface {
  public function getAllProducts();
  public function getLatestProducts();
  public function womenArea();
}