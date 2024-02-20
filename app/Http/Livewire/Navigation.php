<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Creador;
use Livewire\Component;

class Navigation extends Component
{
    public $is_c;

    public function render()
    {
        $categories = Categoria::all();

        $creador= Creador::where('user_id',auth()->user()->id)
            ->where('estado_verificacion','completada')    
            ->first();

        if($creador) $this->is_c = 1;
        else $this->is_c = 0;

        return view('livewire.navigation',compact('categories'));
    }
}
