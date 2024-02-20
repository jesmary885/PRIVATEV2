<?php

namespace App\Http\Controllers;

use App\Models\Creador;
use App\Models\PerfilesPopulares;
use Illuminate\Http\Request;

class HomeController extends Controller
{

   public function __invoke()
   {

    $creadors = Creador::where('estado_verificacion','completada')->get();

    $perfiles_populares = PerfilesPopulares::all();

    return view('home',compact('creadors','perfiles_populares'));

    }
}
