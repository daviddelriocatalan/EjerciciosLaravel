<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use App\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller{

    public function index(){
        return view('portada');
    }

    public function historia(){
        //Como pasarle datos a la vista: con una array a pelo o con la funcion compact
        $datos = ['Años 60', 'Años 70', 'Años 80', 'Años 90'];
        $descripciones = ['Habia pocos negros', 'Empezaron a llegar muchos negros', 'Un tal Michael Jordan aparece', 'Michael Jordan le peta el cacas a todos'];

        return view('historia', ['datos' => $datos], compact('descripciones'));

        //Otra manera de pasar datos
        //return view('historia')->with('datos', $datos)->with('descripciones', $descripciones);
    }

    public function jugadores(){
        $jugadores = DB::table('jugadores')->select('Codigo', 'Nombre', 'Procedencia', 'Altura', 'Peso', 'Posicion')->where('Nombre_equipo', '=', 'Lakers')->get();
        return view('jugadores', compact('jugadores'));
    }

    public function jugador($id){
        $jugadorDatos = DB::table('jugadores')->select('Codigo', 'Nombre', 'Procedencia', 'Altura', 'Peso', 'Posicion')->where('Codigo', '=', $id)->get();
        $jugadorEstadisticas = DB::table('estadisticas')->select('temporada', 'Puntos_por_partido', 'Asistencias_por_partido', 'Tapones_por_partido', 'Rebotes_por_partido')->where('jugador', '=', $id)->get();
    
        return view('jugador', compact('jugadorDatos'), compact('jugadorEstadisticas'));
    }

    public function equipo($nombre){
        $jugadoresEquipo = DB::table('jugadores')->select('Codigo', 'Nombre', 'Procedencia', 'Altura', 'Peso', 'Posicion')->where('Nombre_equipo', '=', $nombre)->get();
        
        return view('equipo', compact('jugadoresEquipo'));
    }

}