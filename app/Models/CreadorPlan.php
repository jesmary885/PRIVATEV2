<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreadorPlan extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    protected $table = "creador_plans";

    //Relacion uno a mucos inversa

    public function creador(){
        return $this->belongsTo(Creador::class);
    }

    public function plan(){
        return $this->belongsTo(Plan::class);
    }
}
