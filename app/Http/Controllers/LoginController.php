<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function authenticate(Request $request){

        $credentials =  $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('id',auth()->user()->id)->first();
          
                    
            if ($request->user()->estado == 'activo') {
            
                $request->session()->regenerate();
                
                $previous_session = Auth::User()->session_id;
                
                if ($previous_session) {

                    Session::getHandler()->destroy($previous_session);
                }
                
                
                    $user->session_id = Session::getId();
                            $user->save();

                            return redirect(route("home")) ?: redirect('login');
            }
            else{
                Session::flush();
                Auth::logout();
        
                $msj = 'Su cuenta se encuentra inactiva, para más información comuníquese con Soporte Técnico';
                return redirect('login')->with('info', $msj);
                            //return redirect('/login');
            }
        }
    }

}

