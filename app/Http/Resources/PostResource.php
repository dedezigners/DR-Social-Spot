<?php

namespace App\Http\Resources;

use App\Http\Resources\LikeResource;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->user->name,
            'type' => $this->type,
            'post' => $this->post,
            'image' => null,
            'likesCount' => 8,
            'commentsCount' => 12,
            'likes' => LikeResource::collection($this->likes),
            'comments' => CommentResource::collection($this->comments),
            'createdAt' => $this->created_at->diffForHumans()
        ];
    }
}
