<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CellDetail extends Model
{
    use HasFactory;
    protected $fillable = ['cell_id','line_no','person_id','person_type'];

    public function cell()
    {
        return $this->belongsTo('\App\Models\Cell');
    }

    public function person()
    {
        return $this->hasOne('\App\Models\Person');
    }
}
