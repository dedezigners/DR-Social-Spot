<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;
use App\Http\Resources\CommentResource;

class PostCommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $this->validate($request, [
            'comment' => 'required|string'
        ]);

        $postComment = new PostComment([
            'comment' => $request->get('comment'),
            'user_id' => auth()->id()
        ]);

        $comment = $post->comments()->save($postComment);
        return new CommentResource($comment);
    }

    public function destroy(Post $post, PostComment $comment)
    {
        $comment->delete();
        return response()->json([
            'commentId' => $comment->id
        ], 200);
    }
}
