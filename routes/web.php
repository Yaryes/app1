<?php
//---------------------------------------------------------------------------//

//************ RUTAS DE LARAVEL *************//
// Route::get('/', function(){
//     // return "Hola desde la pagina de inicio";
//     echo "<a href='/contacto'> pagina contacto</a>";
// });


// Route::get('contacto', function(){
//     return " Hola desde la pagina de CONTACTO";
// });

// Route::get('contactame', function(){
//     return "Sesion de contactos";
// })->name('contactos');

// Route::get('/', function(){
//   echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>"; 
//   echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>"; 
//   echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>"; 
//   echo "<a href='" . route('contactos') . "'>Contactos 4</a><br>"; 
// });

//----------------Buena practica ->> nombre a las rutas (home)---------------
// Route::get('/', function(){
//     return view('home');
//  })->name('home');

// Route::view ('/','home')->name('home');
// Route::view ('/about', 'about')->name('about');
// Route::view ('/portfolio', 'portfolio')->name('portfolio');
// Route::view ('/contact', 'contact')->name('contact');

//*********** METODOS DE ENVIO DE DATOS **************/
// Route::post() -> Enviar Formularios  

//*********** METODOS DE ENVIO DE DATOS **************/



$portfolio =[
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'],
];

Route::view ('/','home')->name('home');
Route::view ('/about', 'about')->name('about');
Route::view ('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
Route::view ('/contact', 'contact')->name('contact');
// Route::get('/portfolio', 'PController')->name('portfolio');
//---------------------------------------------------------------------------//
