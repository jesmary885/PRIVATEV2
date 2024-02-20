<?php

namespace App\Http\Livewire\IniciarCreador;

use App\Models\Creador;
use App\Models\Gener;
use App\Models\Pais;
use App\Models\suscripcion;
use App\Models\User;
use App\Models\Verificacion;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;


class Formulario extends Component
{
    use WithFileUploads;

    protected $listeners = ['render' => 'render'];

    public $list_selfie,$list_video,$list_doc_frente,$list_doc_reverso,$documento_id,$user,$file,$fecha_nacimiento,$name,$lastname,$geners,$direccion,$gener_id,$paises,$pais_id,$zip_code,$instagram,$facebook,$doc_frente,$doc_reverso,$selfie,$video,$caduca,$fecha_caducidad,$terminos;

    protected $rules = [
        'name' => 'required',
        'lastname' => 'required',
        'fecha_nacimiento' => 'required',
        'gener_id' => 'required',
        'direccion' => 'required',
        'pais_id' => 'required',
        'zip_code' => 'required',
        'documento_id' => 'required',
        'doc_frente' => 'required|image',
        'doc_reverso' => 'required|image',
        'selfie' => 'required|image',
        'video' => 'required',
    ];



    public function mount(){

        $this->user = User::where('id',auth()->user()->id)->first();
        $creador = Creador::where('user_id',auth()->user()->id)->first();

        $this->name = $this->user->name;
        $this->lastname = $this->user->lastname;
        $this->gener_id = $this->user->gener_id;
        $this->fecha_nacimiento = $this->user->fecha_nacimiento;
        $this->pais_id = $this->user->pais_id;

        if($creador){
            $this->direccion = $creador->direccion;
            $this->zip_code = $creador->zip_code;
            $this->instagram = $creador->instagram;
            $this->facebook = $creador->facebook;
        }

       
        $this->geners=Gener::all();
        $this->paises = Pais::all();
    }

    public function render()
    {
        if($this->doc_frente) $this->list_doc_frente = 1;
        if($this->doc_reverso) $this->list_doc_reverso = 1;
        if($this->selfie) $this->list_selfie = 1;
        if($this->video) $this->list_video = 1;
        return view('livewire.iniciar-creador.formulario');
    }

    public function procesar(){

        $rules = $this->rules;
        $this->validate($rules);

        if($this->terminos){

            $doc_frente = Storage::put('public/verificaciones', $this->doc_frente);
            $doc_reverso = Storage::put('public/verificaciones', $this->doc_reverso);
            $selfie = Storage::put('public/verificaciones', $this->selfie);
            $video = Storage::put('public/verificaciones', $this->video);

            $suscripcion = new Verificacion() ;
            $suscripcion->user_id = auth()->user()->id;
            $suscripcion->tipo_documentos = $this->documento_id;
            $suscripcion->documento_frente = $doc_frente;
            $suscripcion->documento_reverso = $doc_reverso;
            $suscripcion->selfie = $selfie;
            $suscripcion->video = $video;
            $suscripcion->status = 'En Espera';
            if($this->caduca) $suscripcion->caducidad_doc = 'No';
            else{
                $suscripcion->caducidad_doc = 'Si';
                $suscripcion->fecha_caducidad_doc = $this->fecha_caducidad;
            }
            $suscripcion->save();

            $this->user->update([
                'name'=>$this->name,
                'lastname'=>$this->lastname,
                'gener_id'=>$this->gener_id,
                'fecha_nacimiento'=> date("Y-m-d", strtotime($this->fecha_nacimiento)),
                'pais_id'=>$this->pais_id,
            ]);

            $creador = Creador::where('user_id',auth()->user()->id)->first();

            if($creador){
                $creador->update([
                    'direccion' => $this->direccion,
                    'zip_code' => $this->zip_code,
                    'instagram' => $this->instagram,
                    'facebook' => $this->facebook,
                ]);
            }
            else{
                $creador_new = new Creador();
                $creador_new->user_id = auth()->user()->id;
                $creador_new->direccion = $this->direccion;
                $creador_new->zip_code = $this->zip_code;
                $creador_new->instagram = $this->instagram;
                $creador_new->facebook = $this->facebook;
                $creador_new->estado_verificacion = 'En Espera';
                $creador_new->save();
            }

           // $this->dispatch('informacion');

           return redirect()->route("creadores.informacion");

            //$this->emitTo('iniciar-creador.informacion','render');

           // Toaster::success('Su solicitud ha sido procesada, espere la respuesta ');

        }


        else{

            $this->emit('error','Debe aceptar terminos y condiciones para procesar la solicitud');

           
        }

        

    }
}
