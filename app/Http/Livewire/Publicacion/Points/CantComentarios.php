<?php

namespace App\Http\Livewire\Publicacion\Points;

use App\Models\ComentarioPublicacion;
use App\Models\Publicacion;
use Livewire\Component;

class CantComentarios extends Component
{
    public $publicacion, $cant_comentarios, $open = false;
    
    protected $listeners = ['render' => 'render'];


    public function mount($publicacion){

        $this->publicacion = Publicacion::where('id',$publicacion)->first();
    }

    public function render()
    {
        $this->cant_comentarios = ComentarioPublicacion::where('publicacion_id',$this->publicacion->id)
            ->count();

        return view('livewire.publicacion.points.cant-comentarios');
    }
}
