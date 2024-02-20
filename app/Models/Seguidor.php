<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seguidor extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //Relacion uno a muchos inversa

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function siguiendo(){
        return $this->belongsTo(User::class, 'siguiendo_id');
    }
}
