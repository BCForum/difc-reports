<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $fillable = ['name','surname','person_type','date_of_birth','phone_no','address','address_2','city','post_code'];

    public function persontype()
    {
        return $this->hasOne('App\Models\PersonType','code','person_type');
    }

    public function cells()
    {
        return $this->hasMany('\App\Models\Cell','shepherd_id','id');
    }

    public function cell()
    {
        return $this->belongsTo('\App\Models\CellDetails');
    }

}

