<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sehirler extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='sehirlers';
    public function getIlceler()
    {
        return $this->hasMany(Ilceler::class,'sehir_id','id');
    }

}
