<?php

namespace App\Http\Controllers;

use App\Models\Creador;
use App\Models\Publicacion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index(){
        return view('profile.index');
    }

    public function mod_image(){

   
        return view('profile.mod_image');
    }

    public function file(Request $request){

        $user = User::where('id',auth()->user()->id)->first();

        $request->validate([
            'file' => 'required|image|max:2048'
        ]);
        
        $url = Storage::put('foto_perfil_usuarios', $request->file('file'));

        $user->update([
            'profile_photo_path' => $url
        ]);

    }

    public function index_edit_image(){

        return view('profile.crop-image-upload');
    }

    
    public function cropImageUploadAjax(Request $request)
    {
    

        $folderPath = public_path('storage/banners/');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);

        //$url = Storage::put('banners', $request->file('image'));

        //dd($url);

        $creador = Creador::where('user_id',auth()->user()->id)->first();
 
         $creador->update([
            'banner' => 'banners/'.$imageName,
         ]);

         

         //$saveFile->name = $imageName;
         //$saveFile->save();
    
        return response()->json(['success']);
    }

    public function cropImagePublicacion(Request $request)
    {
        $folderPath = public_path('storage/publicaciones/');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);

        $publicacion = Publicacion::where('user_id',auth()->user()->id)
        ->where('status','no completada')
        ->first();

        $publicacion->update([
            'profile' => 'publicaciones/'.$imageName,
        ]);



        return response()->json(['success']);
    }


  

    public function add_public(){

        return view('profile.add_public');
    }
}
