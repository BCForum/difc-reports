<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CellReportLine extends JsonResource
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
            'cell_report_id' => (int)$this->cell_report_id,
            'line_no' => (int)$this->line_no,
            'person_type' => $this->person_type,
            'person_id' => (int)$this->person_id,
            'name' => $this->name,
            'surname' => $this->surname,
            'new_visitor' => $this->new_visitor,
        ];
    }
}
