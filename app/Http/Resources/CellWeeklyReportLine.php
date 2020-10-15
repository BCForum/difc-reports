<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CellWeeklyReportLine extends JsonResource
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
            'weekly_report_id' => (int)$this->weekly_report_id,
            'id' => (int)$this->id,
            'person_type' => $this->person_type,
            'person_id' => (int)$this->person_id,
            'name' => $this->name,
            'surname' => $this->surname,
            'new_visitor_cell' => $this->new_visitor_cell,
            'new_visitor_service' => $this->new_visitor_service,
            'cell' => $this->cell,
            'service' => $this->service,
        ];
    }
}
