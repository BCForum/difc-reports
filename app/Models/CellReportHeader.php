<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CellReportHeader extends Model
{
    use HasFactory;
    protected $fillable = ['cell_id','sheperd_id','sheperd_name','cell_date','submit_date','holy_spirit_working','message_to_snr_pastor','feedback','contact_total','member_total','salvation_total'];

    public function cell()
    {
        return $this->belongsTo('\App\Models\Cell');
    }

    public function lines()
    {
        return $this->hasMany('\App\Models\CellReportLine');
    }
}
