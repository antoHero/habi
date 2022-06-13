<?php

namespace App\Enums;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self AVAILABLE()
 * @method static self INAVAILABLE()
 */
final class StockEnum extends Enum {
    const AVAILABLE = "AVAILABLE";
    const INAVAILABLE = "INAVAILABLE";
}
