<?php

namespace App\Http\Controllers;

use App\Redes;
use App\Comercio;
use Illuminate\Http\Request;

class RedesController extends Controller
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
        return view('redes.create', compact('comercio'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $i = Redes::create($request->all());
      session()->flash('mensaje', 'Datos del comercio actualizados!');
      return redirect()->route('comercio.show', $i->comercio_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Redes  $redes
     * @return \Illuminate\Http\Response
     */
    public function show(Redes $redes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Redes  $redes
     * @return \Illuminate\Http\Response
     */
    public function edit(Redes $redes)
    {
        return view('redes.edit', compact('redes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Redes  $redes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redes $redes)
    {
      $p = Redes::find($redes->id)->update($request->all());
      session()->flash('mensaje', 'Ficha actualizada con éxito!');
      return redirect()->route('comercio.show', $redes->comercio_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Redes  $redes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redes $redes)
    {
      $m = Redes::find($redes->id)->delete();
      session()->flash('mensaje', 'Ficha eliminada con éxito!');
      return back();
    }
}
