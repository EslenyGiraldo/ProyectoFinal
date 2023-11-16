<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrator;

class AdministratorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrators = Administrator::all();
        return view('administrators.pagInicialPostLogAdmin', compact('administrators'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $administrator = Administrator::find($id);
        return view('administrators.modificarDatosAdmin', compact('administrator'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $administrator = Administrator::find($id);
        $administrator->nombre = $request->nameU;
        $administrator->apellido = $request->apellidoU;
        $administrator->numcel = $request->numcelU;
        $administrator->deporte = $request->deporteU;
        $administrator->sede = $request->sedeU;
        $administrator->passw = $request->passwU;
        $administrator->save();
        return redirect()->route('administrators.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function pagInicio(){
        return view('Administradores.modificarDatosAdmin');
    }
}
