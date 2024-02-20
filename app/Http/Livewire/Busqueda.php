<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Busqueda extends Component
{
    public $search;

    public $open = false;

    public function updatedSearch($value){
        if ($value) {
            $this->open = true;
        }else{
            $this->open = false;
        }
    }
    
    public function render()
    {

        if ($this->search) {

            $users = User::where('name', 'LIKE' ,'%' . $this->search . '%')
                ->take(8)
                ->get();
         
        }
         else {
            $users = [];
        }

        return view('livewire.busqueda',compact('users'));
    }
}
