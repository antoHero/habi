<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, HasSlug, SoftDeletes;

    protected $fillable = [
        'is_product',
        'is_accessory',
        'is_fabric',
        'name',
        'amount',
        'image',
        'qty',
        'accessory_id',
        'category_id',
        'sub_category_id',
        'fabric_id',
        'color',
        'type',
        'size',
        'occasion',
        'style',
        'material',
        'slug',
        'detail',
        'status'
    ];

     /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category() 
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'size' => 'array',
    ];

    public function product_attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }
}
