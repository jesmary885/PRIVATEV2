<?php

namespace App\Http\Livewire\Publicacion\Points;

use App\Models\Seguidor;
use Livewire\Component;

class DejarDeSeguir extends Component
{

    public $creator;

    public function mount($creator){

        $this->creator = $creator;

    }
    public function render()
    {
        return view('livewire.publicacion.points.dejar-de-seguir');
    }

    public function dejare(){
        
        Seguidor::where('user_id',auth()->user()->id)
            ->where('siguiendo_id',$this->creator->id)
            ->first()
            ->delete();

        $this->emitTo('profile.view-profile-user','render');
    }
}
