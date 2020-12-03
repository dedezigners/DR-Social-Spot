<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class CommentLike extends Model
{
    protected $fillable = [
        'post_comment_id', 'user_id'
    ];

    /**
     * Relation
     */
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function comment()
    {
        return $this->hasOne(PostComment::class);
    }
}
