<?php

namespace App\Http\Controllers;

use App\Barrios;
use App\Comercio;
use Illuminate\Http\Request;

class BarriosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barrios = Barrios::paginate(20);
        return view ('barrios.index', compact('barrios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('barrios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barrio = new Barrios();
        $barrio->name = $request->name;
        $barrio->zona = $request->zona;
        $barrio->upz  = $request->upz;   
        $barrio->save();

        session()->flash('mensaje', 'Barrio creado con éxito!');
        return view('barrios.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Barrios  $barrios
     * @return \Illuminate\Http\Response
     */
    public function show(Barrios $barrios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Barrios  $barrios
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $barrio = Barrios::where('id', $request->id)->first();
        return view('barrios.edit', compact('barrio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Barrios  $barrios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $barrio = Barrios::where('id', $request->id)->first();
        if ($request->name) {
            $barrio->name = $request->name;
        }

        if ($request->zona) {
            $barrio->zona = $request->zona;
        }
        
        if ($request->upz) {
            $barrio->upz = $request->upz;
        }
        
        
        
        $barrio->update();

        session()->flash('mensaje', 'Barrio actualizado con éxito!');
        return redirect()->route('barrios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Barrios  $barrios
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barrios $barrios)
    {
        $barrio = Barrios::where('id', $request->id)->first();
        $barrio->delete();
        session()->flash('mensaje', 'Barrio eliminado con éxito!');
        return redirect()->route('barrios.index');
    }

    // BUSCADOR

        public function buscadorBarrios(Request $request)
        {
            $nombre = $request->get('buscar');
            $barrios = Barrios::orderBy('id', 'DESC')
            ->Search($nombre)
            ->paginate(20);
            
            if (!$barrios) {
                session()->flash('mensaje', 'No se encontraron resultados');
                return redirect()->route('barrios.index');
            }
            else
            {
            return view('barrios.index', compact('barrios'));
            }
        }
}
