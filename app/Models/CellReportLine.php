<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CellReportLine extends Model
{
    use HasFactory;
    protected $fillable = ['cell_report_id','line_no','person_type','person_id','name','surname','new_visitor'];

    public function cellreport()
    {
        return $this->belongsTo('\App\Models\CellReportHeader','cell_report_id');
    }

    public function person()
    {
        return $this->hasOne('\App\Models\Person');
    }
}
