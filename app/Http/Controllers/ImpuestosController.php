<?php

namespace App\Http\Controllers;

use App\Impuestos;
use App\Comercio;
use Illuminate\Http\Request;
use App\Http\Requests\Impuesto;

class ImpuestosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impuestos = Impuestos::paginate(10);
        return view('crudImpuestos.index', compact('impuestos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudImpuestos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Impuesto $request)
    {
        $i = Impuestos::create($request->all());
        session()->flash('mensaje', 'Impuesto creado con éxito!');
        return redirect()->route('crudImpuestos.index', $i->comercio_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Impuestos  $impuesto
     * @return \Illuminate\Http\Response
     */
    public function show(Impuestos $impuesto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Impuestos  $impuesto
     * @return \Illuminate\Http\Response
     */
    public function edit(Impuestos $impuesto)
    {
        return view('crudImpuestos.edit', compact('impuesto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Impuestos  $impuesto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Impuestos $impuesto)
    {
      $p = Impuestos::find($impuesto->id)->update($request->all());
      session()->flash('mensaje', 'Impuesto actualizado con éxito!');
      return redirect()->route('crudImpuestos.index', $impuesto->comercio_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Impuestos  $impuesto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Impuestos $impuesto)
    {
      $m = Impuestos::find($impuesto->id)->delete();
      session()->flash('mensaje', 'Impuesto eliminado con éxito!');
      return back();
    }
}
