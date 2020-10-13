<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CellWeeklyReport extends JsonResource
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
            'id' => (int)$this->id,
            'cell_id' => (int) $this->cell_id,
            'sheperd_id' => (int) $this->shepherd_id,
            'sheperd_name' => $this->shepherd_name,
            'submit_date' => $this->submit_date,

        ];
    }
}
