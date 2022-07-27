<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jackiedo\Cart\Contracts\UseCartable;
use Jackiedo\Cart\Traits\CanUseCart;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model implements UseCartable
{
    use HasFactory, HasSlug, SoftDeletes, CanUseCart;
    
    protected $appends = [
        'total_order_items'
    ];

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

    /**
     * Scope a query to only include users of a given type.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  mixed  $type
     * @return \Illuminate\Database\Eloquent\Builder
     */

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'size' => 'array',
    ];

    public function product_attributes(): HasMany
    {
        return $this->hasMany(ProductAttribute::class);
    }

    public function fabric(): HasOne
    {
      return $this->hasOne(Fabric::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function getTotalOrderItemsAttribute()
    {
        return $this->items->count();
    }

    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }


}
