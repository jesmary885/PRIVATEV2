<?php

namespace App\Http\Controllers;

use App\Models\Creador;
use Illuminate\Http\Request;

class CreadoresController extends Controller
{
    public function index(){

        return view('creadores.index');
    }

    public function select(Creador $creator){
        return view('profile.view_profile_creator',compact('creator'));
    }

    public function start_index(){
        return view('creadores.start_index');
    }

    public function start_form(){
        return view('creadores.start_form');
    }

    public function informacion(){
        return view('creadores.informacion');
    }

}
