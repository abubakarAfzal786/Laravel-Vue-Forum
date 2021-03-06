<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'comment'=>$this->comment,
            'username'=>$this->user->name,
            'created_at'=> $this->created_at->diffForHumans(),
            'child_id'=>$this->child_id,
            'id'=>$this->id,
            'user_id'=>$this->user_id
        ];
    }
}
