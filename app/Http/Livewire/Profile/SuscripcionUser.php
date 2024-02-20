<?php

namespace App\Http\Livewire\Profile;


use App\Models\Creador;
use App\Models\CreadorPlan;
use App\Models\Plan;
use App\Models\ServiciosPlan;
use App\Models\suscripcion;
use App\Models\User;
use Livewire\Component;
use Yoeunes\Toastr\Toastr;

class SuscripcionUser extends Component
{
    public $open = false, $user, $plan, $contenido_plan, $sf, $porcentaje, $porcentaje_style, $creador,$plan_creador ;

    protected $rules = [
     
    ];


    public function mount($plan, Creador $creador){

        $this->user = User::where('id',auth()->user()->id)->first();
        $this->creador = $creador;

        $this->plan = Plan::where('id',$plan)->first();

        $this->contenido_plan = ServiciosPlan::where('plan_id',$plan)->get();

        $this->plan_creador = CreadorPlan::where('plan_id',$plan)->first();

        if($this->user->balance >= $this->plan_creador->precio) $this->sf = 1;
        else{
            $this->porcentaje =  ($this->user->balance * 100) / $this->plan_creador->precio;

            $this->porcentaje_style = "width:". $this->porcentaje ."%";
        }
    }

    public function render()
    {
        return view('livewire.profile.suscripcion-user');
    }
    public function close(){

        $this->open = false;

    }

    public function suscribir(){

        if($this->sf == 1){

            $fecha_actual = date("Y-m-d H:i:s");

            $suscripcion = new suscripcion() ;
            $suscripcion->plan_id = $this->plan->id;
            $suscripcion->creador_id = $this->creador->id;
            $suscripcion->user_id = auth()->user()->id;
            $suscripcion->status = 'activo';
            $suscripcion->fecha_vencimiento = date("Y-m-d H:i:s",strtotime($fecha_actual."+ 30 days"));
            $suscripcion->save();

            $balance = $this->user->balance;

            $this->user->update([
                'balance' => $balance - $this->plan_creador->precio
            ]);

            

            toastr()->success('¡Felicidades!, tu suscripción ha sido procesada correctamente');

            $this->reset(['open']);
            $this->emitTo('profile.suscripcion-user','render');

            //Toaster::success('¡Felicidades!, tu suscripción ha sido procesada correctamente'); 

        }
    }

}
