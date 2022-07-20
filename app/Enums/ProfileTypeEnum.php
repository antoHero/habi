<?php

namespace App\Enums;
use Spatie\Enum\Laravel\Enum;

/**
 * @method static self admin()
 * @method static self user()
 * @method static self super()
 */
final class ProfileTypeEnum extends Enum {
    const admin = "admin";
    const super = "super";
    const user = "user";
}
