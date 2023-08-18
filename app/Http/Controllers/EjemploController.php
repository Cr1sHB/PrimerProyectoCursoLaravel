<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploController extends Controller
{
    public function index(){
        // return "Hola esto es usuarios controlador";
        return view('index');
    }
    public function create(){
        // return "Hola esto es usuarios crear controlador";
        return view('create');
    }
    public function show($idusuario,$nombreusuario = null){
        // if($nombreusuario){
            // return "Hola usuario " .$nombreusuario ." tu id es " .$idusuario;
        // }
        // else{
        //      return "Hola tu id es: " .$idusuario;
        // }
        return view('show',['IDUsuario'=> $idusuario,'nombreusuario'=> $nombreusuario]);
    }
}
