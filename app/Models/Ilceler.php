<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ilceler extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='ilcelers';
    public function getSehir()
    {
        return $this->belongsTo(Sehirler::class,'sehir_id','id');
    }
    public function getaraba()
    {
        return $this->hasMany(Arabalar::class,'ilce_id','id');
    }
}
