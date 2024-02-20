<?php

namespace App\Http\Livewire\IniciarCreador;

use Livewire\Component;

class Beneficios extends Component
{
    public $open = false, $user, $biografia;


    public function close(){
        $this->open = false;
    }

    
    public function render()
    {
        return view('livewire.iniciar-creador.beneficios');
    }
}
