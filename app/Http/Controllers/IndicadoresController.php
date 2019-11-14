<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barrios;
use App\Impuestos;
use App\Requisito;
use App\Comercio;
use Illuminate\Support\Facades\DB;

class IndicadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barrios = Barrios::orderBy('name', 'ASC')->get();
        $requisitos = Requisito::orderBy('name', 'ASC')->get();
        $impuestos = Impuestos::orderBy('name', 'ASC')->get();
        return view('indicadores.index', compact('barrios', 'impuestos', 'requisitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function impuesto(Request $request)
    {
      $barrio = Barrios::where('id', $request->barrio)->first();
      $data = $request->impuesto;
      if ($barrio) {
        $comercios = DB::table('comercios')
               ->where('barrio_id', $request->barrio)
               ->where(function ($query) use ($request) {
                   $query->where('impuesto_id1', $request->impuesto)
                         ->orWhere('impuesto_id2', $request->impuesto)
                         ->orWhere('impuesto_id3', $request->impuesto)
                         ->orWhere('impuesto_id4', $request->impuesto)
                         ->orWhere('impuesto_id5', $request->impuesto)
                         ->orWhere('impuesto_id6', $request->impuesto)
                         ->orWhere('impuesto_id7', $request->impuesto)
                         ->orWhere('impuesto_id8', $request->impuesto);
               })
               ->count();
       $noComercios = DB::table('comercios')
              ->where('barrio_id', $request->barrio)
              ->where(function ($query) use ($request) {
                  $query->where('impuesto_id1', '!=', $request->impuesto)
                        ->where('impuesto_id2', '!=', $request->impuesto)
                        ->where('impuesto_id3', '!=', $request->impuesto)
                        ->where('impuesto_id4', '!=', $request->impuesto)
                        ->where('impuesto_id5', '!=', $request->impuesto)
                        ->where('impuesto_id6', '!=', $request->impuesto)
                        ->where('impuesto_id7', '!=', $request->impuesto)
                        ->where('impuesto_id8', '!=', $request->impuesto);
              })
              ->count();



       return view('indicadores.resultados', compact('comercios', 'barrio', 'noComercios', 'data'));
      }
      else {
        $comercios = DB::table('comercios')
                         ->where('impuesto_id1', $request->impuesto)
                         ->orWhere('impuesto_id2', $request->impuesto)
                         ->orWhere('impuesto_id3', $request->impuesto)
                         ->orWhere('impuesto_id4', $request->impuesto)
                         ->orWhere('impuesto_id5', $request->impuesto)
                         ->orWhere('impuesto_id6', $request->impuesto)
                         ->orWhere('impuesto_id7', $request->impuesto)
                         ->orWhere('impuesto_id8', $request->impuesto)
                         ->count();
       $noComercios = DB::table('comercios')
              ->where('impuesto_id1', '!=', $request->impuesto)
                        ->where('impuesto_id2', '!=', $request->impuesto)
                        ->where('impuesto_id3', '!=', $request->impuesto)
                        ->where('impuesto_id4', '!=', $request->impuesto)
                        ->where('impuesto_id5', '!=', $request->impuesto)
                        ->where('impuesto_id6', '!=', $request->impuesto)
                        ->where('impuesto_id7', '!=', $request->impuesto)
                        ->where('impuesto_id8', '!=', $request->impuesto)

              ->count();



       return view('indicadores.resultados', compact('comercios', 'barrio', 'noComercios', 'data'));
      }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function requisito(Request $request)
    {
      $barrio = Barrios::where('id', $request->barrio)->first();
      $data = $request->requisito;
      if ($barrio) {
        $comercios = DB::table('comercios')
               ->where('barrio_id', $request->barrio)
               ->where(function ($query) use ($request) {
                   $query->where('requisito_id1', $request->requisito)
                         ->orWhere('requisito_id2', $request->requisito)
                         ->orWhere('requisito_id3', $request->requisito)
                         ->orWhere('requisito_id4', $request->requisito)
                         ->orWhere('requisito_id5', $request->requisito)
                         ->orWhere('requisito_id6', $request->requisito)
                         ->orWhere('requisito_id7', $request->requisito)
                         ->orWhere('requisito_id8', $request->requisito);
               })
               ->count();
       $noComercios = DB::table('comercios')
              ->where('barrio_id', $request->barrio)
              ->where(function ($query) use ($request) {
                  $query->where('requisito_id1', '!=', $request->requisito)
                        ->where('requisito_id2', '!=', $request->requisito)
                        ->where('requisito_id3', '!=', $request->requisito)
                        ->where('requisito_id4', '!=', $request->requisito)
                        ->where('requisito_id5', '!=', $request->requisito)
                        ->where('requisito_id6', '!=', $request->requisito)
                        ->where('requisito_id7', '!=', $request->requisito)
                        ->where('requisito_id8', '!=', $request->requisito);
              })
              ->count();



       return view('indicadores.resultados', compact('comercios', 'barrio', 'noComercios', 'data'));
      }
      else {
        $comercios = DB::table('comercios')
                          ->where('requisito_id1', $request->requisito)
                         ->orWhere('requisito_id2', $request->requisito)
                         ->orWhere('requisito_id3', $request->requisito)
                         ->orWhere('requisito_id4', $request->requisito)
                         ->orWhere('requisito_id5', $request->requisito)
                         ->orWhere('requisito_id6', $request->requisito)
                         ->orWhere('requisito_id7', $request->requisito)
                         ->orWhere('requisito_id8', $request->requisito)

               ->count();
       $noComercios = DB::table('comercios')
                        ->where('requisito_id1', '!=', $request->requisito)
                        ->where('requisito_id2', '!=', $request->requisito)
                        ->where('requisito_id3', '!=', $request->requisito)
                        ->where('requisito_id4', '!=', $request->requisito)
                        ->where('requisito_id5', '!=', $request->requisito)
                        ->where('requisito_id6', '!=', $request->requisito)
                        ->where('requisito_id7', '!=', $request->requisito)
                        ->where('requisito_id8', '!=', $request->requisito)

              ->count();



       return view('indicadores.resultados', compact('comercios', 'barrio', 'noComercios', 'data'));
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function barrios()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
