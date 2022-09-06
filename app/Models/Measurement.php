<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'style_id',
        'measurement'
    ];

    protected $with = ['user', 'product', 'style'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id');
    }
}
