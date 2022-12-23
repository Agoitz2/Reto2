<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateautenticacionRequest;
use App\Models\autenticacion;
use Illuminate\Support\Facades\Hash;
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
        // $clave1 = Hash::make('1234');
        // $clave1 = Crypt::encrypt('1234');
        $user = autenticacion::find('1');
        $clave1=$user->contrasena;
        $cadenaDesencriptada = Crypt::decrypt($clave1);

        // if ($this->comprobarContrasena('1234')) {
        //    $si='si';
        // }else{
        //     $si='no';
        // }
        return view("welcome", ["clave1" => $clave1, 'si'=>$cadenaDesencriptada]);

    }

    public function comprobarContrasena(string $request)
    {
        $input = $request;

        $user = autenticacion::find('1');
    
        
        $clave2 = bcrypt('1234');
        if(!bcrypt.compare($input, $clave2)){
    
            return true;
    
        }else{
    
           return false;
    
        }
    

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request) {
        User::create([
            'name'=> $request->get('name'),
            'lastname'=> $request->get('lastname'),
            'email'=> $request->get('email'), 
          
        ]);
        
        return redirect(route('users.list'));
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
