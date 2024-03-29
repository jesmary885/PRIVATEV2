<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointsComentario extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    //Relacion uno a muchos inversa
    public function comentario_publicacion(){
        return $this->belongsTo(ComentarioPublicacion::class);
    }

    //Relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
}
