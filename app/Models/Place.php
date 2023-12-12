<?php

namespace App\Models;

use App\Policies\PlacePolicy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'description',
        'image',
        'video',
        'city_id',
    ];

    protected $policies = [
        Place::class => PlacePolicy::class,
    ];
    public $timestamps = true;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
