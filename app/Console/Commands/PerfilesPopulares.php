<?php

namespace App\Console\Commands;

use App\Models\Creador;
use App\Models\PerfilesPopulares as ModelsPerfilesPopulares;
use App\Models\Seguidor;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;

class PerfilesPopulares extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'perfiles:populares';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Registar perfiles más populares';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $creadores_populares = [];

        $cantidad_creadores = Creador::where('estado_verificacion','completada')
            ->where('estado','activo')
            ->count();

       /* if($cantidad_creadores  < 10) $posiciones = $cantidad_creadores ;
        else $posiciones = 10;*/

        $creadores = Creador::where('estado_verificacion','completada')
            ->where('estado','activo')
            ->get();



        foreach ($creadores as $creador){
             
            $seguidores = Seguidor::where('siguiendo_id',$creador->id)->count();
            array_push($creadores_populares, array('creador_id'=>$creador->id,'seguidores'=>$seguidores));
           // $creadores_populares = array_add('creador_id'=>$creador->id,'seguidores'=>$seguidores);
        }

        foreach ($creadores_populares as $llave => $fila) {
            $seguidore[$llave]  = $fila['seguidores'];
        }

        array_multisort($seguidore, SORT_DESC, $creadores_populares);


      for($i=0;$i<count($seguidore);$i++){

            $creador_popular = new ModelsPerfilesPopulares();
            $creador_popular->lugar = $i+1;
            $creador_popular->creador_id = $creadores_populares[$i]['creador_id'];
            $creador_popular->save();
       }

    }
}
