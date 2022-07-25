<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TemporalOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'country',
        'address',
        'city',
        'state',
        'code',
        'email',
        'phone',
        'status',
        'tracking_id',
        'reference'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function temporal_order_items(): HasMany
    {
        return $this->hasMany(TemporalOrderItem::class, 'temporal_order_id');
    }
}
