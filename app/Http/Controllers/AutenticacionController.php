<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreautenticacionRequest;
use App\Http\Requests\UpdateautenticacionRequest;
use App\Models\autenticacion;

class AutenticacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreautenticacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreautenticacionRequest $request)
    {
        //
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
