<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        return PostResource::collection(Post::latest()->get());
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'message' => 'required'
        ]);

        $post = auth()->user()->posts()->create([
            'type' => 'text',
            'post' => $request->get('message')
        ]);

        return new PostResource($post);
    }

    public function show(Post $post)
    {
        return $post;
    }
}
