<?php

namespace App\Repositories;
use App\Interfaces\StyleRepositoryInterface;
use App\Models\{Style, Category};
use Illuminate\Support\Facades\DB;

class StyleRepository implements StyleRepositoryInterface {
    
    public function styles()
    {
        return Style::all();
    }
    
    public function create(array $styleDetails)
    {
        return DB::transaction(function() use($styleDetails) {
            return Style::create($styleDetails);
        });
    }

    public function style(Style $style)
    {
        return $style;
    }

    public function updateStyle(Style $style, array $styleDetails)
    {
        return $style->update($styleDetails);
    }

    public function deleteStyle(Style $style)
    {
        return $style->delete();
    }
}