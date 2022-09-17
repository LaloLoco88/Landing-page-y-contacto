<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function landingpage(){
        return view('landingpage');
    }

    public function contacto($codigo = null){
        if(!empty($codigo) and $codigo == '1234'){
            $nombre = "Pancho Lopez";
            $email = "panchol@gmail.com";
        }else{
            $codigo = null;
            $nombre = '';
            $email = '';
        }
        return view('contacto', compact('codigo', 'nombre', 'email'));
    }

    public function recibeFormContacto(Request $request){
        $request->validate([
            'nombre'=>'required|max:255|min:3',
            'email'=>['required','email'],
            'comentario'=>'required|max:255|min:10',
        ]);
    }
}
