<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostLike;
use Illuminate\Http\Request;
use App\Http\Resources\LikeResource;

class PostLikeController extends Controller
{
    public function like(Post $post)
    {
        $postLike = new PostLike([
            'user_id' => auth()->id()
        ]);
        
        $like = $post->likes()->save($postLike);
        return new LikeResource($like);
    }

    public function dislike(Post $post)
    {
        $post->likes()->where('user_id', auth()->id())->first()->delete();
        return response()->json([
            'userId' => auth()->id()
        ], 200);
    }
}
