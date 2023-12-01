<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_type',
        // Add other fields as needed
    ];

    /**
     * Get the posts associated with the status.
     */

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
   
}
