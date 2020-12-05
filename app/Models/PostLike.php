<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PostLike extends Model
{
    protected $fillable = [
        'post_id', 'user_id'
    ];

    /**
     * Relations
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
