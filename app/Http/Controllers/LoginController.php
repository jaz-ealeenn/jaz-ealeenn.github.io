<?php

namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use DB;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'invitado']);
    }
    
    public function index(){
        $credentials = $this->validate(request(), [
            'email' => 'email|string',
            'password' => 'required|string'
        ]);
        if(Auth::attempt($credentials)){
        $correo = $credentials['email'];
        $datos = DB::table('users')->where('email', $correo)->get();

        $acceso = DB::table('users')->where('email', $correo)->pluck('id_tipo_usuario')->first();
        }
        switch($acceso){
            case '4':
                return view('Administrador.Administrador', compact('datos'));
            break;
            case '1':
                return view('dashboard', compact('datos'));
            break;
            case '3':
                return view('dashboard', compact('datos'));
            break;
            case '2':
                return view('dashboard', compact('datos'));
            break;
        }
        return "El id es: ". $datos ."+";
    }
    public function invitado(){
        return "Invitado";
    }
}
