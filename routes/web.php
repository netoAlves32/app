<?php

// satuFundacion.com  Route::get('/', function);

// satuFundacion.com/contacto  Route::get('contacto/', function

//Route::get('/',function(){
//    return "Hola mi gente, que tal";
//});

//Route::pos();

//Route::get('GaleriaInter/{saludo?}',function($saludo = "Nigeria"){
//    return $saludo. "Galeria chocoana";
//});

Route::view('/','Home')->name('home');
Route::view('/Contactanos','contactanos')->name('contacto');
Route::view('/SobreNosotros','aboutUs')->name('about');
Route::view('/Donacion','donacion')->name('donar');
Route::view('/Portafolio','portafolio')->name('portafolio');
Route::view('/Galeria','galeria')->name('galery');




//Route::get('/',function(){
//    echo "<a href='".route('Contactanos')."'>Contacto</a><br>";
//});

//Route::get('/',function(){
//  $nombre = "Neto";
//  return view('home')->with('nombre',$nombre);
    //return view('home',['nombre', $nombre]);
    //return view('home', compact('nombre'))
//})->name('home');

//Route::view('/', 'home');
