<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    //Para mostrar la vista
    public function show(){
        if(Auth::check()){ //Valida si hay un usuario con una sesion autenticada
            return redirect('/home'); //Si hay va a la ruta /home
        }
        return view('auth.register');
    }


    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/home')->with('success', 'Account created successfully');
    }
}
