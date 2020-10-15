<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    use HasFactory;
    protected $fillable = ['shepherd_id','spouse_id','address','address_2','city','post_code'];

    public function shepherd()
    {
        return $this->belongsTo('\App\Models\Person','shepherd_id');
    }

    public function members()
    {
        return $this->hasMany('\App\Models\CellDetail');
    }

}
