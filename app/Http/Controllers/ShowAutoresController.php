<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowAutoresController extends Controller
{
    public function index(){
        $escritores = DB::table('escritors')
            ->orderBy('nombre')
            ->get();
        return view('escritores', ['escritores' => $escritores]);
    }
}
