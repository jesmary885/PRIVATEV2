<?php

namespace App\Http\Livewire\Publicacion\Points;

use App\Models\ComentarioPublicacion;
use App\Models\Publicacion;
use Livewire\Component;

class Comentar extends Component
{
    public $comentario,$publicacion;

    protected $listeners = ['render' => 'render'];

    protected $rules = [
        'comentario' => 'required',
    ];

    public function mount($publicacion){

        $this->publicacion = Publicacion::where('id',$publicacion)->first();

    }

    public function render()
    {
        return view('livewire.publicacion.points.comentar');
    }

    public function comentar(){

        $rules = $this->rules;
        $this->validate($rules);

        $comentario = new ComentarioPublicacion() ;
        $comentario->user_id = auth()->user()->id;
        $comentario->publicacion_id = $this->publicacion->id;
        $comentario->comentario = $this->comentario;
        $comentario->save();

        $this->reset(['comentario']);

       $this->emitTo('publicacion.points.cant-comentarios','render');
       $this->emitTo('publicacion.points.ver-comentarios','render');
       //$this->emitSelf('render');
      // return redirect(request()->header('Referer'));
     /*  $this->emitTo('publicacion.points.me-gusta','render');
       $this->emitTo('profile.view-profile-user','render');*/

   

    }
}
