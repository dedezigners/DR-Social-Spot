<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'comment' => $this->comment,
            'userId' => $this->user_id,
            'createdAt' => $this->created_at->diffForHumans(),
            'user' => new UserResource($this->user),
            'likes' => LikeResource::collection($this->likes)
        ];
    }
}
