<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //al metodo encargado de mostrar la pagina principal se le llama index
    public function index(){
     return view('cursos.index');

    }

    //al metodo encargado de mostrate el formulario para crear un curso se le llama create
    public function create(){
    return view('cursos.create');

    }

    //al metodo encargadod e mostrar un elemento en particular, en este caso un curso se le llama show
    public function show($curso){
    return view('cursos.show', ['curso' => $curso ]);

    }

}
