<?php

namespace App\Http\Livewire\Publicacion\Points;

use App\Models\ComentarioPublicacion;
use App\Models\Publicacion;
use Livewire\Component;

class VerComentarios extends Component
{
    public $publicacion, $cant_comentarios;

    public $perPage = 10;

    protected $listeners = ['render' => 'render'];


    public function mount($publicacion){

        $this->publicacion = Publicacion::where('id',$publicacion)->first();
    }

    public function loadMore()
    {
        $this->perPage += 10;
    }

    

    public function render()
    {

        $comentarios = ComentarioPublicacion::where('publicacion_id',$this->publicacion->id)
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.publicacion.points.ver-comentarios',compact('comentarios'));
    }

    public function delete($comentario){

        ComentarioPublicacion::where('id',$comentario)->first()->delete();



    }
}
