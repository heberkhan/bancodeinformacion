<?php

namespace App\Http\Controllers;

use App\Requisito;
use Illuminate\Http\Request;
use App\Http\Requests\Requisitos;

class RequisitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisitos = Requisito::paginate(10);
        return view('requisitos.index', compact('requisitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requisitos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requisitos $request)
    {
        $req = Requisito::create($request->all());
        session()->flash('mensaje', 'Requisito creado con éxito!');
        return redirect()->route('requisitos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requisito  $requisito
     * @return \Illuminate\Http\Response
     */
    public function show(Requisito $requisito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requisito  $requisito
     * @return \Illuminate\Http\Response
     */
    public function edit(Requisito $requisito)
    {
        return view('requisitos.edit', compact('requisito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requisito  $requisito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requisito $requisito)
    {
      $p = Requisito::find($requisito->id)->update($request->all());
      session()->flash('mensaje', 'Requisito actualizado con éxito!');
      return redirect()->route('requisitos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requisito  $requisito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requisito $requisito)
    {
      $m = Requisito::find($requisito->id)->delete();
      session()->flash('mensaje', 'Requisito eliminado con éxito!');
      return back();
    }
}
