<?php

namespace App\Http\Controllers;

use App\GestionMercado;
use App\Comercio;
use Illuminate\Http\Request;

class GestionMercadoController extends Controller
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
    public function create(Comercio $comercio)
    {
        return view('gestion.create', compact('comercio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $i = GestionMercado::create($request->all());
      session()->flash('mensaje', 'Datos del comercio actualizados!');
      return redirect()->route('comercio.show', $i->comercio_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GestionMercado  $gestion
     * @return \Illuminate\Http\Response
     */
    public function show(GestionMercado $gestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GestionMercado  $gestion
     * @return \Illuminate\Http\Response
     */
    public function edit(GestionMercado $gestion)
    {
        return view('gestion.edit', compact('gestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GestionMercado  $gestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GestionMercado $gestion)
    {
      $p = GestionMercado::find($gestion->id)->update($request->all());
      session()->flash('mensaje', 'Ficha actualizada con éxito!');
      return redirect()->route('comercio.show', $gestion->comercio_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GestionMercado  $gestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(GestionMercado $gestion)
    {
      $m = GestionMercado::find($gestion->id)->delete();
      session()->flash('mensaje', 'Ficha eliminada con éxito!');
      return back();
    }
}
