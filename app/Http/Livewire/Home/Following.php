<?php

namespace App\Http\Livewire\Home;

use App\Models\Seguidor;
use Livewire\Component;

class Following extends Component
{
    public $cant_seguidores,$creador;

    public function mount($creador){
        $this->creador = $creador;
    }
    public function render()
    {

        $this->cant_seguidores = Seguidor::where('siguiendo_id',$this->creador->id)
            ->count();

        return view('livewire.home.following');
    }
}
