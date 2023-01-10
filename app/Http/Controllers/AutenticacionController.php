<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\autenticacion;
use Illuminate\Support\Facades\Crypt;

class AutenticacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("welcome");

    }

    public function store(Request $request) {
        $this->validate($request, [
            "usuario" => "required||unique:posts|min:1",
            "nombre" => "required|min:1",
            "apellido" => "required|min:1",
            "email" => "required||email",
            "contrasena" => "required|min:8",
            "confirmacion" => "required|min:8|same:contrasena",
        ],
        [
            'usuario.required'=> 'Introduce el nombre de usuario. ', // custom message
            'nombre.required'=> 'Introduce el nombre. ',
            'apellido.required'=> 'Introduce el apellido. ', 
            'email.required'=> 'Introduce el email. ', 
            'contrasena.required'=> 'Introduce una contraseña. ', 
            'contrasena.min'=> 'Introduce una contraseña de minimo 8 caracteres. ', 
            'confirmacion.same'=> 'Las contraseñas no coinciden. ', 
         ]);
        autenticacion::create([
            'usuario'=> $request->get('usuario'),
            'nombre'=> ucfirst($request->get('nombre')),
            'apellido'=> ucfirst($request->get('apellido')), 
            'email'=> $request->get('email'), 
            'contrasena'=> bcrypt($request->get('contrasena')), 
          
        ]);
        
        return redirect(route('create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\autenticacion  $autenticacion
     * @return \Illuminate\Http\Response
     */
    public function show(autenticacion $autenticacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\autenticacion  $autenticacion
     * @return \Illuminate\Http\Response
     */
    public function edit(autenticacion $autenticacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateautenticacionRequest  $request
     * @param  \App\Models\autenticacion  $autenticacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateautenticacionRequest $request, autenticacion $autenticacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\autenticacion  $autenticacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(autenticacion $autenticacion)
    {
        //
    }
}
