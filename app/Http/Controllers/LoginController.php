<?php

namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class LoginController extends Controller
{
    
    
    public function index(){
        $user = Auth::user();
     
        $acceso = $user->id_tipo_usuario;
        switch($acceso){
            
            case '1':
                return view('dashboard');
            break;
            case '3':
                return view('dashboard');
            break;
            case '2':
                return view('dashboard');
            break;
            case '4':
                return redirect()->route('admin');
            break;
        }
        
    }
     
     
}
