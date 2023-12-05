<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome');
    }
    public function fnEstDetalle ($id){
        return view('paglista');
    }
    public function fnlista (){
        $xDetAlumnos = Estudiante::findOrFail($id);     //Datos de BD por Id
        return view('Estudiante.pagDetalle', compac('xDetAlumnos'));
    }
    public function fnGaleria ($numero=0) {
        $valor = $numero;
        $otro = 25;

        //return view('pagGaleria' ,['valor'=>$numero, 'otro'=>25]);
        return view('pagGaleria', compact('valor','otro'));
    }
}
