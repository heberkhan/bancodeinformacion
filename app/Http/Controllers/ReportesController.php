<?php

namespace App\Http\Controllers;
use App\Comercio;
use App\Barrios;
use App\Impuestos;
use Illuminate\Http\Request;
use App\Exports\ComerciosExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impuestos = Impuestos::get();
        $comercios = Comercio::count();
        $barrios = Barrios::get();
        return view('reportes.index', compact('comercios', 'barrios', 'impuestos'));
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
    public function ComercioAlDia(Request $request)
    {


      $comercios = DB::table('comercios')
                     ->join('barrios', 'comercios.barrio_id', '=', 'barrios.id')
                     ->select('comercios.*', 'barrios.name', 'barrios.zona', 'barrios.upz')
                     ->where('comercios.barrio_id', $request->barrio)
                     ->where('comercios.impuesto_id1', $request->impuesto)
                     ->get();
      $barrio = Barrios::where('id', $request->barrio)->first();
    return view('reportes.alDia', compact('comercios', 'barrio'));
    }



    public function categoria(Request $request)
    {
      $comercios = Comercio::where('categoria', $request->categoria)->get();
      $categoria = $request->categoria;
      return view('reportes.categoria', compact('comercios', 'categoria'));
    }

    public function msjPorFechas(Request $request)
    {
      $f1 = $request->fechaInicio;
      $f2 = $request->fechaFin;
      $barrio = Barrios::where('id', $request->barrio)->first();
      if ($f1 != null && $f2 != null) {
        $comercios = Comercio::where('barrio_id', $request->barrio)
                             ->where('pqr', '>', '0')
                             ->whereDate('updated_at', '>=', $f1)
                             ->whereDate('updated_at', '<=', $f2)
                             ->get();
        return view('reportes.porFechas', compact('comercios', 'f1', 'f2', 'barrio'));
      }

      if ($f1 != null && $f2 == null) {
        $comercios = Comercio::where('barrio_id', $request->barrio)
                             ->where('pqr', '>', '0')
                             ->whereDate('updated_at', '>=', $f1)
                             ->get();
        return view('reportes.porFechas', compact('comercios', 'f1', 'f2', 'barrio'));
      }

      if ($f1 == null && $f2 != null) {
        $comercios = Comercio::where('barrio_id', $request->barrio)
                             ->where('pqr', '>', '0')
                             ->whereDate('updated_at', '<=', $f2)
                             ->get();
        return view('reportes.porFechas', compact('comercios', 'f1', 'f2', 'barrio'));
      }

      if ($f1 == null && $f2 == null) {
        $comercios = Comercio::where('barrio_id', $request->barrio)
                             ->where('pqr', '>', '0')
                             ->get();
        return view('reportes.porFechas', compact('comercios', 'f1', 'f2', 'barrio'));
      }
    }

    public function total()
    {
      $f1 = null;
      $f2 = null;
      $barrio = null;
      $comercios = Comercio::where('pqr', '>=', '0')->get();
      return view('reportes.porFechas', compact('comercios', 'f1', 'f2', 'barrio'));
    }

    public function datosAbiertos()
    {
      $comercios = DB::table('comercios')
                ->join('barrios', 'comercios.barrio_id', '=', 'barrios.id')
                ->select('comercios.*', 'barrios.name', 'barrios.upz')
                ->get();
      return view('reportes.completo', compact('comercios'));
    }

    public function export()
    {
        return Excel::download(new ComerciosExport, 'comercios.xlsx');


    }



}
