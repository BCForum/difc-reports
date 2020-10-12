<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeeklyReportHeader extends Model
{
    use HasFactory;
    protected $fillable = ['cell_id','sheperd_id','sheperd_name','submit_date'];

    public function cell()
    {
        return $this->belongsTo('\App\Models\Cell');
    }

    public function lines()
    {
        return $this->hasMany('\App\Models\WeeklyReportLine');
    }

}
