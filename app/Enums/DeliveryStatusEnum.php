<?php 

namespace App\Enums;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self DELIVERED()
 * @method static self PROGRESS()
 * @method static self PENDING()
 * @method static self CANCELED()
 */
final class DeliveryStatusEnum extends Enum {
    const DELIVERED = "DELIVERED";
	const PROGRESS = "PROGRESS";
    const PENDING = "PENDING";
    const CANCELED = "CANCELED";
}