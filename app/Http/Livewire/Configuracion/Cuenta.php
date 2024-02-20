<?php

namespace App\Http\Livewire\Configuracion;

use App\Models\Pais;
use Livewire\Component;

class Cuenta extends Component
{
    public $paises = [];

    public function mount(){

        $this->paises = Pais::all();

    }
    
    public function render()
    {
        return view('livewire.configuracion.cuenta');
    }
}
