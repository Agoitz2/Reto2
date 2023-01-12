<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    //
    public function logout(){ //Terminar la sesion
        Session::flush(); //Eliminar las sesiones 'liberar'

        Auth::logout();

        return redirect()->to('/login');
    }
}
