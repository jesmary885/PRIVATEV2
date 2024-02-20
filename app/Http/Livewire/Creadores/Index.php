<?php

namespace App\Http\Livewire\Creadores;

use App\Models\Creador;
use App\Models\Gener;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class Index extends Component
{
    use WithPagination;

    public $gener,$generos;

    public $view = "grid";


    protected $queryString = ['gener'];

    public function limpiar(){
        $this->dispatch('volver');
    }

    public function  mount(){

        $this->generos = Gener::all();
    }



    public function updatedGener(){
        $this->resetPage();
    }

    public function render()
    {
        $creators = Creador::with('user.pais')
        ->paginate(20);

    if ($this->gener) {
        $creatorsQuery = Creador::whereHas('user', function(Builder $query){
            $query->where('gener_id', $this->gener);
        });

        $creators = $creatorsQuery->paginate(20);

      
    }

        return view('livewire.creadores.index',compact('creators'));
    }
}
