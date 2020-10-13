<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CellReportHeader extends JsonResource
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
            'cell_date' => $this->cell_date,
            'submit_date' => $this->submit_date,
            'holy_spirit_working' => $this->holy_spirit_working,
            'message_to_snr_pastor' => $this->message_to_snr_pastor,
            'feedback' => $this->feedback,
            'contact_total' => (int)$this->contact_total,
            'member_total' => (int)$this->member_total,
            'salvation_total' => (int)$this->salvation_total,
        ];
    }
}
