<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CellDetail extends JsonResource
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
            'cell_id' => (int)$this->cell_id,
            'line_no' => (int)$this->line_no,
            'person_id' => (int)$this->person_id
        ]
    }
}
