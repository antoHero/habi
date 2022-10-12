<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'phone',
        'country',
        'state',
        'city',
        'address',
        'code',
    ];

    public function user(): Relation
    {
        return $this->belongsTo(User::class);
    }
}
