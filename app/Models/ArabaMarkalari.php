<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArabaMarkalari extends Model
{
    use HasFactory, SoftDeletes;
    protected $table='araba_markalaris';
    public function getMarkaModel()
    {
        return $this->hasMany(ArabaMarka_model::class,'marka_id','id');
    }
}
