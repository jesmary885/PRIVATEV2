<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;

class Register extends Component
{

    public $nombre;

    protected $listeners = ['render' => 'render'];

    protected $rules = [
        'plan' => 'required',
        'metodo_id' => 'required',
        'nro_referencia' => 'required|numeric|unique:pago_registros_recargas|min_digits:6',
        'fecha_pago' => 'required',
        'file' => 'required|image',
    ];
    
    public function render()
    {
        return view('livewire.usuarios.register');
    }
}
