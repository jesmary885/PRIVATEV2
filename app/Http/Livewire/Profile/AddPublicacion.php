<?php

namespace App\Http\Livewire\Profile;

use App\Models\Categoria;
use App\Models\Publicacion;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;


class AddPublicacion extends Component
{
    use WithFileUploads;

    public $cargada = 0,$status,$descripcion,$valor, $vista='privada', $categoria_id, $categorias, $open = false, $user, $option, $video, $image, $video_cargado, $foto_cargada;

    protected $rules = [
        'descripcion' => 'required',
        'categoria_id' => 'required'
    ];

    protected $rules_valor = [
        'valor' => 'required',
    ];


    public function mount(){

        $this->user = User::where('id',auth()->user()->id)->first();

        $this->option = 1;


    }

    public function editar_imagen(){

        $url = Storage::put('public/publicaciones', $this->image);
                $publicacion = new Publicacion();
                $publicacion->categoria_id = $this->categoria_id;
                $publicacion->contenido = $this->descripcion;
                $publicacion->valor = $this->valor;
                $publicacion->vista = 'privada';
                $publicacion->tipo = 'foto';
                $publicacion->profile = $url;
                $publicacion->status = 'no completada';
                $publicacion->user_id = auth()->user()->id;
                $publicacion->save();

                $this->cargada = 1;

                $this->image = Publicacion::where('user_id',auth()->user()->id)
                    ->where('status','no completada')
                    ->first()->profile;

                    $this->emit('editar_imagen');

              //  $this->dispatch('editar_imagen');

        $this->open = false;

      
    }

    public function render()
    {


        $this->categorias = Categoria::all();

        $this->status = Publicacion::where('user_id',auth()->user()->id)
            ->where('status','no completada')
            ->count();

        if($this->status == 1){
            $this->image = Publicacion::where('user_id',auth()->user()->id)
                ->where('status','no completada')
                ->first()->profile;

            $this->cargada = 1;
        }


        return view('livewire.profile.add-publicacion');
    }

    public function close(){

        

        $this->open = false;

        $this->emit('volver');

       // $this->dispatch('volver');

    }

    public function save(){


        if($this->vista == 'privada'){
            $rules = $this->rules;
            $this->validate($rules);
    
            $rules_valor = $this->rules_valor;
            $this->validate($rules_valor);

            if($this->option == 1) {
                $url = Storage::put('public/publicaciones', $this->video);
                $tipo = 'video';
            }
            else {
                $url = Storage::put('public/publicaciones', $this->image);
                $tipo = 'foto';
            }

            $publicacion = new Publicacion();
            $publicacion->categoria_id = $this->categoria_id;
            $publicacion->contenido = $this->descripcion;
            $publicacion->valor = $this->valor;
            $publicacion->vista = 'privada';
            $publicacion->tipo =  $tipo;
            $publicacion->profile = $url;
            $publicacion->status = 'completada';
            $publicacion->user_id = auth()->user()->id;
            $publicacion->save();
            
        }

        else{
            $rules = $this->rules;
            $this->validate($rules);

            $publicacion = new Publicacion();
            $publicacion->categoria_id = $this->categoria_id;
            $publicacion->contenido = $this->descripcion;
            $publicacion->vista = 'publica';
            $publicacion->save();
        }

        $this->open = false;

        return redirect()->route("profile_user");


       /* $this->open = false;

        $this->emitTo('profile.index','render');*/


    }

    public function save_file(){

        //dd($this->video);

            $url = Storage::put('public/publicaciones', $this->video);

            $publicacion = new Publicacion();
            $publicacion->tipo = 'video';
            $publicacion->profile = $url;
            $publicacion->status = 'no completada';
            $publicacion->user_id = auth()->user()->id;
            $publicacion->save();



    }

   /* public function update(){

        $rules = $this->rules;
        $this->validate($rules);

        $this->user->update([
            'biografia' => $this->biografia,
        ]);

        $this->open = false;

        $this->dispatch('profile.index');

    }*/
}
