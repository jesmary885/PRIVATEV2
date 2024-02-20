<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

     //Relacion mucho a muchos
     public function creadors(){
        return $this->belongsToMany(Creador::class);
     }
}
