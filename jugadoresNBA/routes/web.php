<?php

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

/*
ESTO ERA ANTES DE HACER EL PAGESCONTROLLER Y PASARLE LAS FUNCIONES

Route::get('/', function () {
    return view('portada');
});

Route::get('/historia', function () {
    //Como pasarle datos a la vista: con una array a pelo o con la funcion compact
    $datos = ['Años 60', 'Años 70', 'Años 80', 'Años 90'];
    $descripciones = ['En los Años 60 no ganaron nada', 'En los Años 70 ganaron dos campeonatos', 'En los Años 80 ganaron un campeonato', 'En los Años 90 ganaron 6 campeonatos'];

    return view('historia', ['datos' => $datos], compact('descripciones'));

    //Otra manera de pasar datos
    //return view('historia')->with('datos', $datos)->with('descripciones', $descripciones);
});

Route::get('/jugadores', function () {
    return view('jugadores');
}); */


Route::get('/', 'PagesController@index');

Route::get('/historia', 'PagesController@historia');

Route::get('/jugadores', 'PagesController@jugadores');

Route::get('/jugador/{id}', 'PagesController@jugador');




