<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonType extends Model
{
    public $incrementing = false;
    public $keyType = 'string';
    protected $primaryKey = 'code';
    protected $fillable = ['code'];
}
