<?php

namespace App\Http\Controllers;

use App\Representante;
use App\Comercio;
use Illuminate\Http\Request;

class RepresentanteController extends Controller
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
        return view('representante.create', compact('comercio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = Representante::create($request->all());
        session()->flash('mensaje', 'Datos del representante legal y/o propietario actualizados!');
        return redirect()->route('comercio.show', $r->comercio_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function show(Representante $representante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function edit(Representante $representante)
    {
        return view('representante.edit', compact('representante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Representante $representante)
    {
      $p = Representante::find($representante->id)->update($request->all());
      session()->flash('mensaje', 'Ficha actualizada con éxito!');
      return redirect()->route('comercio.show', $representante->comercio_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Representante  $representante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Representante $representante)
    {
      $m = Representante::find($representante->id)->delete();
      session()->flash('mensaje', 'Ficha eliminada con éxito!');
      return back();
    }
}
