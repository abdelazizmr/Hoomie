<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Request;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'gender',
        'image',
        'address',
        'age',
        'privacy',
        'utype',
    ];

    public function interests()
    {
        return $this->hasOne(Interest::class);
    }
    public function chat()
    {
        return $this->hasMany(Chat::class);
    }
    public function post()
    {
        return $this->hasMany(Post::class);
    }

 
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Get a single user by ID.
     *
     * @param int $id
     * @return User|null
     */
    static public function getSingle($id): ?User
    {
        return self::find($id);
    }


}
