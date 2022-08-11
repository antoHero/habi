<?php

namespace App\Repositories;
use App\Interfaces\SpecialOrderRepositoryInterface;
use App\Models\Measurement;
use Illuminate\Support\Facades\DB;

class SpecialOrderRepository implements SpecialOrderRepositoryInterface {
    public function submitMeasurement(array $measurementDetails)
    {
        return DB::transaction(function() use($measurementDetails) {
            return Measurement::create($measurementDetails);
        });
    }
}