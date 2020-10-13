<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Person extends JsonResource
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
            'name' => $this->name,
            'surname' => $this->surname,
            'person_type' => $this->person_type,
            'date_of_birth' => $this->date_of_birth,
            'phone_no' => $this->phone_no,
            'address' => $this->address,
            'address_2' => $this->address_2,
            'city' => $this->city,
            'post_code' => $this->post_code,

        ];
    }
}
