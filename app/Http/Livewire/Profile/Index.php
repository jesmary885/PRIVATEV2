<?php

namespace App\Http\Livewire\Profile;

use App\Models\Creador;
use App\Models\CreadorPlan;
use App\Models\Publicacion;
use App\Models\User;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class Index extends Component
{
    public $user,$is_c,$creador;

    protected $listeners = ['render' => 'render'];

    public function mount(){
        $this->user = User::where('id',auth()->user()->id)->first();

        $this->creador= Creador::where('user_id',auth()->user()->id)
            ->where('estado_verificacion','completada')    
            ->first();

        if($this->creador) $this->is_c = 1;
        else $this->is_c = 0;

    }

    protected function reproduct(){

        return "nodownload";

    }

    public function render()
    {

        if($this->is_c == 1){
            $planes = CreadorPlan::where('creador_id',$this->creador->id)->get() ?? [];

            $publicaciones= Publicacion::where('user_id',auth()->user()->id)
                ->get() ?? [];

            return view('livewire.profile.index', compact('publicaciones','planes'));
    
            
        }
        else{

            return view('livewire.profile.index');


        }

        
    }

    public function refreshUser(){
        $this->user = $this->user->fresh();
    }
}
