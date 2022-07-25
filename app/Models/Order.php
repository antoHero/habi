<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
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
        'payment_type',
        'order_amount',
        'tracking_id',
        'reference',
        'delivery_type',
        'note',
        'payment_status'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function order_items(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'temporal_order_id');
    }
}
