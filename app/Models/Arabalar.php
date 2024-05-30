<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Arabalar extends Model
{
    use HasFactory,SoftDeletes;
    protected $table='arabalars';

    public function getUser()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function getModel()
    {
        return $this->belongsTo(ArabaMarka_model::class,'model_id','id');

    }
    public function getHasar()
    {
        return $this->belongsTo(Araba_hasarKayitlari::class,'hasar_id','id');
    }
    public function getIlce()
    {
        return $this->belongsTo(Ilceler::class,'ilce_id','id');
    }
    public function getMedias()
    {
        return $this->hasMany(Media_gallery::class,'araba_id','id');
    }
}
