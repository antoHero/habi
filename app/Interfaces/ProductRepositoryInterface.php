<?php

namespace App\Interfaces;

interface ProductRepositoryInterface {
    public function createApparel(array $apparelInfo);
    public function getAllApparels();
    public function apparel($apparel);
    public function updateApparel($apparelSlug, array $apparelInfo);
    public function deleteApparel($apparelSlug);
}