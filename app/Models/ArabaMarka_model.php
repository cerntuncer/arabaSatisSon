<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArabaMarka_model extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='araba_marka_models';
    public function getMarka()
    {
        return $this->belongsTo(ArabaMarkalari::class,'marka_id','id');
    }
    public function getArabalar()
    {
        return $this->hasMany(Arabalar::class,'model_id','id');
    }
}
