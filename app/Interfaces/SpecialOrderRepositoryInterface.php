<?php 

namespace App\Interfaces;

interface SpecialOrderRepositoryInterface {
    public function submitMeasurement(array $measurementDetails);
}