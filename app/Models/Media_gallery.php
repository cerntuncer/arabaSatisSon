<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media_gallery extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='media_galleries';
    public function getAraba()
    {
        return $this->belongsTo(Arabalar::class,'araba_id','id');
    }
}
