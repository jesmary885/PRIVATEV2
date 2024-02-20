<?php

namespace App\Http\Livewire\Publicacion\Points;

use App\Models\PointsPublicacion;
use Livewire\Component;

class VerMeGustas extends Component
{

    public $cant_me_gusta, $open = false,$public;

    public $perPage = 10;


    public function loadMore()
    {
        $this->perPage += 10;
    }
    

    public function mount($publicacion){

        $this->public = $publicacion;




        $this->cant_me_gusta= PointsPublicacion::where('publicacion_id',$publicacion)
                ->count();
        
    }


    
    public function render()
    {

        $me_gustan = PointsPublicacion::where('publicacion_id',$this->public)
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.publicacion.points.ver-me-gustas',compact('me_gustan'));
    }

    public function close(){

        $this->open = false;

    }
}
