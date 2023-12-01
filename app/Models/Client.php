<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'address',
        'age',
        'gender',
    ];

    /**
     * Get the user that owns the client.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function interest()
    {
        return $this->hasMany(Interest::class);
    }
    public function chat()
    {
        return $this->hasMany(Chat::class);
    }
}
