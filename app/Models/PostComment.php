<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable = [
        'comment', 'post_id', 'user_id'
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
        return $this->hasOne(Post::class);
    }

    public function likes()
    {
        return $this->hasMany(CommentLike::class);
    }
}
