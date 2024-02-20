<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracionController extends Controller
{


    public function cuenta(){
        return view('configurations.account');
    }

    public function privacidad(){
        return view('configurations.privacidad');
    }

    public function pagos(){
        return view('configurations.pagos');
    }

    public function solicitudes(){
        return view('configurations.solicitudes');
    }
}
