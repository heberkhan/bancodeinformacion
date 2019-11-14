<?php

namespace App\Http\Controllers;

use App\DatosLocal;
use App\Comercio;
use Illuminate\Http\Request;

class DatosLocalController extends Controller
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
        $com = Comercio::where('id', $comercio->id)->first();
        return view('datos.create', compact('com'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosLocal = DatosLocal::create($request->all());
        session()->flash('mensaje', 'Datos del comercio actualizados!');
        return redirect()->route('comercio.show', $datosLocal->comercio_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosLocal  $datosLocal
     * @return \Illuminate\Http\Response
     */
    public function show(DatosLocal $datosLocal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosLocal  $datosLocal
     * @return \Illuminate\Http\Response
     */
    public function edit(DatosLocal $datosLocal)
    {
        return view('datos.edit', compact('datosLocal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosLocal  $datosLocal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatosLocal $datosLocal)
    {
      $p = DatosLocal::find($datosLocal->id)->update($request->all());
      session()->flash('mensaje', 'Ficha actualizada con éxito!');
      return redirect()->route('comercio.show', $datosLocal->comercio_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosLocal  $datosLocal
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatosLocal $datosLocal)
    {
      $m = DatosLocal::find($datosLocal->id)->delete();
      session()->flash('mensaje', 'Ficha eliminada con éxito!');
      return back();
    }
}
