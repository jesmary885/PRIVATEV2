<?php

namespace App\Http\Livewire\IniciarCreador;

use Livewire\Component;

class Instrucciones extends Component
{
    public $open = false;


    public function close(){
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.iniciar-creador.instrucciones');
    }
}
