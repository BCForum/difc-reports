<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyReportLine extends Model
{
    use HasFactory;
    protected $fillable = ['weekly_report_id','line_no','person_type','person_id','name','surname','new_visitor_cell','new_visitor_service','cell','service'];

    public function weeklyreport()
    {
        return $this->belongsTo('\App\Models\WeeklyReportHeader','weekly_report_id');
    }

    public function person()
    {
        return $this->hasOne('\App\Models\Person');
    }
}
