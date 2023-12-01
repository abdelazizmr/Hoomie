<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'region',
        'image'
    ];

    /**
     * Get the posts for the city.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

}
