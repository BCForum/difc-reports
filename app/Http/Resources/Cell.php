<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cell extends JsonResource
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
            'sheperd_id' => (int) $this->sheperd_id,
            'spouse_id' => (int) $this->spouse_id,
            'address' => $this->address,
            'address_2' => $this->address_2,
            'city' => $this->city,
            'post_code' => $this->post_code,

        ]
    }
}
