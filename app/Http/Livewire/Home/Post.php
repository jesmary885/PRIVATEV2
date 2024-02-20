<?php

namespace App\Http\Livewire\Home;

use App\Models\Publicacion;
use App\Models\Seguidor;
use Livewire\Component;

class Post extends Component
{
    public $cant_post,$creador;

    public function mount($creador){
        $this->creador = $creador;
    }

    public function render()
    {
        $this->cant_post = Publicacion::where('user_id',$this->creador->user_id)
        ->count();

        return view('livewire.home.post');
    }
}
