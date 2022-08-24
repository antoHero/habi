<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Style extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'name',
        'price',
        'slug',
        'description',
        'image',
        'category_id',
        'status',
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

    protected $with = ['category'];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
