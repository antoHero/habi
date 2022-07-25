<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TemporalOrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'temporal_order_id',
        'product_id',
        'name',
        'amount',
        'qty'
    ];

    public function temporal_order(): BelongsTo
    {
        return $this->belongsTo(TemporalOrder::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
