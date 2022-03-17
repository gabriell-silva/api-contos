<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Conto extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body,
            'is_enabled' => $this->is_enabled,
            'created_at' => $this->created_at,
            'update_at' => $this->update_at,
        ];  
    }
}
