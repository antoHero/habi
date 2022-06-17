<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Fabric extends Model
{
    use HasFactory, HasSlug;

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
}
