<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Araba_hasarKayitlari extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='araba_hasar_kayitlari';
    public function getHasars()
    {
        return $this->belongsTo(Arabalar::class,'hasar_id','id');
    }

}
