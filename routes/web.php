<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpage', function (){
    return view('landingpage');
});

Route::get('/contacto/{codigo?}', function ($codigo = null){
    if(!empty($codigo) and $codigo == '1234'){
        $nombre = "Jesus Martinez";
        $email = "jesusm@gmail.com";
    }else{
        $codigo = null;
        $nombre = '';
        $email = '';
    }
    return view('contacto', compact('codigo', 'nombre', 'email'));
});