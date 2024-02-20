<?php

namespace App\Http\Livewire\Profile;

use App\Models\CreadorPlan;
use App\Models\PointsPublicacion;
use App\Models\Publicacion;
use App\Models\Seguidor;
use App\Models\Suscripcion;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ViewProfileUser extends Component
{
    public $verif,$creator, $planes, $user;

    protected $listeners = ['render' => 'render'];

    public function mount($creator){

        $this->creator = $creator;

        $this->planes = CreadorPlan::where('creador_id',$this->creator->id)
            ->get();

        

        $this->user = User::where('id',auth()->user()->id)->first();
    }

    public function point_user($id_publicacion){

        return PointsPublicacion::where('publicacion_id',$id_publicacion)
            ->where('user_id',$this->user->id)
            ->count();
    }

    public function seguir(){
        $verif = Seguidor::where('user_id',auth()->user()->id)
            ->where('siguiendo_id',$this->creator->id)
            ->first();

        if(!$verif) {
             $seguir_new = new Seguidor();
             $seguir_new->user_id = auth()->user()->id;
             $seguir_new->siguiendo_id = $this->creator->id;
             $seguir_new->save();
        }

       // $this->emitTo('profile.view-profile-user','render');


    }

    public function cant_seguidores(){

        return Seguidor::where('siguiendo_id',$this->creator->id)
            ->count();
    }

    public function cant_public(){

        return Publicacion::where('user_id',$this->creator->user_id)
            ->count();
    }

    public function positivo($id_publicacion){

        $busqueda = PointsPublicacion::where('publicacion_id',$id_publicacion)
        ->where('user_id',$this->user->id)
        ->first();

        if($busqueda){
            $busqueda->delete();
        }

        else{

            $new_point = new PointsPublicacion();
            $new_point->user_id = $this->user->id;
            $new_point->publicacion_id = $id_publicacion;
            $new_point->ponderacion = 1;
            $new_point->save();
        }

    }

    public function reputation_publicacion($id_publicacion){

        return PointsPublicacion::where('publicacion_id',$id_publicacion)
            ->count();
    }




    public function view_publication($id){

        $publicacion = Publicacion::where('id',$id)->first();

        $suscripcion = Suscripcion::where('user_id',auth()->user()->id)
            ->where('creador_id',$this->creator->id)
            ->where('plan_id',$publicacion->categoria_id)
            ->where('status','activo')
            ->count();

        if($suscripcion > 0) return Storage::url($publicacion->profile);
        else{
            if($publicacion->tipo == 'foto') return url('/imagen/imagen-no-disponible.jpg');
            else return url('/imagen/185096 (360p).mp4');
        } 

    }

    public function dejare(){
        
        Seguidor::where('user_id',auth()->user()->id)
            ->where('siguiendo_id',$this->creator->id)
            ->first()
            ->delete();

        //$this->emitTo('profile.view-profile-user','render');
    }


    public function render()
    {

        $verif = Seguidor::where('user_id',auth()->user()->id)
        ->where('siguiendo_id',$this->creator->id)
        ->first();

        if($verif) $this->verif = 2;
        else $this->verif= 1;


        $publicaciones = Publicacion::where('user_id',$this->creator->user->id)
        ->get();

        return view('livewire.profile.view-profile-user',compact('publicaciones'));
    }
}
