<?php

namespace App\Enums;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self APPAREL()
 * @method static self FABRIC()
 * @method static self ACCESSORY()
 */
final class ProductEnum extends Enum {
    const APPAREL = "APPAREL";
	  const ACCESSORY = "ACCESSORY";
    const FABRIC = "FABRIC";
}
