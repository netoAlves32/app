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

Route::get('Contactanos',function(){
    return "Nuestro número es 3146810822";
})->name('Contactanos');

Route::get('/',function(){
    echo "<a href='".route('Contactanos')."'>Contacto</a><br>";
});

Route::get('/',function(){
    return view('welcome');
})->name('home');
