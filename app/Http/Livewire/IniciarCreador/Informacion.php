<?php

namespace App\Http\Livewire\IniciarCreador;

use Livewire\Component;

class Informacion extends Component
{
    protected $listeners = ['render' => 'render'];
    
    public function render()
    {
        return view('livewire.iniciar-creador.informacion');
    }

    public function volver(){
        return redirect()->route("home");
        //$this->emit('volver');
    }
}
