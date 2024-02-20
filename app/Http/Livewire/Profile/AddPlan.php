<?php

namespace App\Http\Livewire\Profile;

use App\Models\Creador;
use App\Models\CreadorPlan;
use App\Models\Plan;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Masmerise\Toaster\Toaster;

class AddPlan extends Component
{
    public $open = false, $creador, $planes, $plan_id, $precio, $accion, $plan_creador;

    protected $rules = [
        'plan_id' => 'required',
        'precio' => 'required'
    ];


    public function mount(Creador $creador, CreadorPlan $plan_creador){

        $plan_creador;

        $this->creador = $creador;

        if($plan_creador){

            $this->plan_creador = $plan_creador;
            $this->plan_id = $plan_creador->plan_id;
            $this->precio = $plan_creador->precio;
             
        }

        $this->planes = Plan::all();

    }


    public function render()
    {
        return view('livewire.profile.add-plan');
    }

    public function close(){

        $this->open = false;

    }

    public function update(){

        $rules = $this->rules;
        $this->validate($rules);

        if($this->accion == 'create'){

            $planes = CreadorPlan::where('creador_id',$this->creador->id)
                ->where('plan_id',$this->plan_id)
                ->count();
            
            if($planes == 1){

                toastr()->warning('Ups, ¡Ha seleccionado un plan ya registrado!, intentelo de nuevo');

              //  Toaster::warning('Ups, ¡Ha seleccionado un plan ya registrado!, intentelo de nuevo'); 

                //$this->dispatch('warning','Ha seleccionado un plan ya registrado');

            }else{

                $plan = new CreadorPlan() ;
                $plan->creador_id = $this->creador->id;
                $plan->plan_id = $this->plan_id;
                $plan->precio = $this->precio;
                $plan->save();

               // $this->open = false;

                $this->reset(['open']);

                $this->reset(['plan_id','precio']);

            }

            

        }
        else
        {
            $plan_update = CreadorPlan::where('id',$this->plan_creador->id)->first();
            
            $plan_update->update([
                'precio' => $this->precio,
            ]);


            $this->reset(['open']);
        }
        $this->emitTo('profile.index','render');

    }
}
