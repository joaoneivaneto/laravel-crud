<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use App\Usuario;
class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::get();
        return view('usuarios.list',['usuarios'=>$usuarios]);
    }
    public function new(){
        return view('usuarios.form');
    }
    public function add(Request $request){
        $usuario = new Usuario;
        $usuario = $usuario -> create($request ->all());
        return redirect::to('/usuarios');

    }
}
