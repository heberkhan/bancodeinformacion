<?php

namespace App\Http\Controllers;
use App\Comercio;
use App\Barrios;
use Illuminate\Http\Request;
use App\Exports\ComerciosExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comercios  = Comercio::OrderBy('id', 'DESC')->paginate(20);
        $barrios    = Barrios::get();
        return view('reportes.index', compact('comercios', 'barrios'));
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
    public function buscar(Request $request)
    {
      $barrios   = Barrios::get();

        $query = Comercio::query();
        $request->tipoPersona ? $query->where('tipoPersona', $request->tipoPersona) : null;
        $request->barrio ? $query->where('barrio', $request->barrio) : null;
        $request->actComercial ? $query->where('actComercial', $request->actComercial) : null;
        $request->categoria ? $query->where('categoria', $request->categoria) : null;
        $request->viaPrincipal ? $query->where('viaPrincipal', $request->viaPrincipal) : null;
        $request->duenoTrabaja ? $query->where('duenoTrabaja', $request->duenoTrabaja) : null;
        $request->tipoLocal ? $query->where('tipoLocal', $request->tipoLocal) : null;
        $request->consumoEnergia ? $query->where('consumoEnergia', $request->consumoEnergia) : null;
        $request->rut ? $query->where('rut', $request->rut) : null;
        $request->camaraComercio ? $query->where('camaraComercio', $request->camaraComercio) : null;
        $request->rtiyc ? $query->where('rtiyc', $request->rtiyc) : null;
        $request->usoSuelos ? $query->where('usoSuelos', $request->usoSuelos) : null;
        $request->diiyc ? $query->where('diiyc', $request->diiyc) : null;
        $request->saycoAcinpro ? $query->where('saycoAcinpro', $request->saycoAcinpro) : null;
        $request->sanidad ? $query->where('sanidad', $request->sanidad) : null;
        $request->manejoAlimentos ? $query->where('manejoAlimentos', $request->manejoAlimentos) : null;
        $request->bomberos ? $query->where('bomberos', $request->bomberos) : null;
        $request->libroDiario ? $query->where('libroDiario', $request->libroDiario) : null;
        $request->ciyc ? $query->where('ciyc', $request->ciyc) : null;
        $request->economiaDigital ? $query->where('economiaDigital', $request->economiaDigital) : null;
        $comercios = $query->orderBy('id', 'DESC')->paginate(20);



        return view('reportes.index', compact('comercios', 'barrios'));
    }

    public function export(Request $request)
      {

          $export = new ComerciosExport([$request]);


          return Excel::download($export, 'reporte.xlsx');
      }

}
