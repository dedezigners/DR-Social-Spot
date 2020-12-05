<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'avatar' => $this->avatar,
            'name' => $this->name,
            'profile' => $this->profile,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            // 'email' => $this->email,
            // 'backupEmail' => $this->backup_email,
            // 'address' => $this->address,
            // 'city' => $this->city,
            // 'state' => $this->state,
            // 'postal_code' => $this->postal_code,
            // 'country' => $this->country,
            // 'phone' => $this->phone
        ];
    }
}
