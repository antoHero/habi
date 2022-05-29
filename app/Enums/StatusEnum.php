<?php 

namespace App\Enums;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self ACTIVE()
 * @method static self INACTIVE()
 * @method static self PENDING()
 * @method static self ARCHIVED()
 */
final class StatusEnum extends Enum {
    const ACTIVE = "ACTIVE";
	const INACTIVE = "INACTIVE";
    const PENDING = "PENDING";
}