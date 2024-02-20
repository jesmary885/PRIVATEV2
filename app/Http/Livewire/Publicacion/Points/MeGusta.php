<?php

namespace App\Http\Livewire\Publicacion\Points;

use App\Models\CreadorPlan;
use App\Models\PointsPublicacion;
use App\Models\Publicacion;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class MeGusta extends Component
{
    public $creator, $planes, $user,$publicacion;

    protected $listeners = ['render' => 'render'];

    public function mount($publicacion){

        $this->publicacion = Publicacion::where('id',$publicacion)->first();

        $this->user = User::where('id',auth()->user()->id)->first();
    }

    public function point_user(){

        return PointsPublicacion::where('publicacion_id',$this->publicacion->id)
            ->where('user_id',$this->user->id)
            ->count();
    }

    public function positivo(){

        $busqueda = PointsPublicacion::where('publicacion_id',$this->publicacion->id)
        ->where('user_id',$this->user->id)
        ->first();

        if($busqueda){
            $busqueda->delete();
        }

        else{

            $new_point = new PointsPublicacion();
            $new_point->user_id = $this->user->id;
            $new_point->publicacion_id = $this->publicacion->id;
            $new_point->ponderacion = 1;
            $new_point->save();
        }

        $this->emitTo('profile.view-profile-user','render');

    }

    public function reputation_publicacion(){

        return PointsPublicacion::where('publicacion_id',$this->publicacion->id)
            ->count();
    }



    public function render()
    {
        return view('livewire.publicacion.points.me-gusta');
    }
}
