<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowLibrosController extends Controller
{
    public function index(){
        $libros = DB::table('libros')
            ->join('escritors', 'escritors.id', '=', 'libros.escritor_id' )
            ->select('libros.*', 'escritors.nombre', 'escritors.apellido')
            ->orderBy('libros.escritor_id')
            ->orderBy('libros.year')
            ->get();
        return view('libros', ['libros' => $libros]);
    }

//    public function libro($titulo){
//        $libro = DB::table('libros')
//            ->where('titulo', '=', $titulo)
//            ->get();
//
//        return view('libroIndividual', ['libro' => $libro]);
//
//    }
}
