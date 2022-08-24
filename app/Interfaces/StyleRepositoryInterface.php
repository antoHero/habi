<?php

namespace App\Interfaces;
use App\Models\Style;

interface StyleRepositoryInterface {
    public function styles();
    public function create(array $styleDetails);
    public function style(Style $style);
    public function updateStyle(Style $style, array $styleDetails);
    public function deleteStyle(Style $style);
}