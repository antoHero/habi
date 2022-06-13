<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fabric extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'qty',
      'price',
      'image',
      'slug',
      'status'
    ];

    public function product()
    {
      return $this->hasOne(Product::class);
    }

    protected $casts = ['price' => 'double:8'];
}
