<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
use Illuminate\Http\Request;
use App\Http\Requests\CrearComercio;
use Illuminate\Support\Facades\Storage;
use App\Comercio;
use App\Barrios;
use App\DatosLocal;
use App\GestionMercado;
use App\Impuestos;
use App\Requisito;
use App\Redes;
use App\Representante;
use Image;
use App\Mensaje;
use App\Msjcontacto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Barryvdh\DomPDF\Facade as PDF;

class ComercioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      return view('comercios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $requisitos = Requisito::orderBy('name', 'ASC')->get();
      $impuestos = Impuestos::orderBy('name', 'ASC')->get();
      $barrios = Barrios::orderBy('name', 'ASC')->get();
      return view('comercios.create', compact('barrios', 'impuestos', 'requisitos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $barrio = Barrios::get();
      $comercio = Comercio::where('nombre', $request->nombreEstablecimiento)->first();
      if ($comercio) {
          session()->flash('mensaje', 'Comercio ya existente!');
          return view('listarComercios', compact('barrios'));
      }
      else {


        // Datos Básicos del comercio
          $comercio = new Comercio;
          $comercio->tipoPersona = $request->tipoPersona;
          $comercio->nit = $request->nit;
          $comercio->nombre = $request->nombreEstablecimiento;
          $comercio->dirEstablecimiento = $request->dirEstablecimiento;
          $comercio->barrio_id = $request->barrio;
          $comercio->dirNotificaciones = $request->dirNotificaciones;
          $comercio->actComercial = $request->actComercial;
          $comercio->categoria = $request->categoria;
          $comercio->telefono = $request->telefono;
          $comercio->celular = $request->celular;
          $comercio->email = $request->email;
          // Descripción e imagen
          //logo

              $ruta = public_path().'/images/logo/';
              $imagenOriginal = $request->file('logo');
              $imagen = Image::make($imagenOriginal);
              $temp_name = $request->nit . '.' . $imagenOriginal->getClientOriginalName();

              $imagen->save($ruta.$temp_name, 100);
              Storage::disk('public')->put($temp_name, file_get_contents($imagenOriginal->getRealPath() ) );

          $comercio->descripcion = $request->descripcion;
          $comercio->logo = $temp_name;
          $comercio->etiquetas = $request->etiquetas;
          $comercio->user_id = $request->user_id;


          //Impuestos
          if ($request->impuesto_id1 != null) {
            $comercio->impuesto_id1 = $request->impuesto_id1;
          }
          else {
            $comercio->impuesto_id1 = 0;
          }
          if ($request->impuesto_id2 != null) {
            $comercio->impuesto_id2 = $request->impuesto_id2;
          }
          else {
            $comercio->impuesto_id2 = 0;
          }
          if ($request->impuesto_id3 != null) {
            $comercio->impuesto_id3 = $request->impuesto_id3;
          }
          else {
            $comercio->impuesto_id3 = 0;
          }
          if ($request->impuesto_id4 != null) {
            $comercio->impuesto_id4 = $request->impuesto_id4;
          }
          else {
            $comercio->impuesto_id4 = 0;
          }
          if ($request->impuesto_id5 != null) {
            $comercio->impuesto_id5 = $request->impuesto_id5;
          }
          else {
            $comercio->impuesto_id5 = 0;
          }
          if ($request->impuesto_id6 != null) {
            $comercio->impuesto_id6 = $request->impuesto_id6;
          }
          else {
            $comercio->impuesto_id6 = 0;
          }
          if ($request->impuesto_id7 != null) {
            $comercio->impuesto_id7 = $request->impuesto_id7;
          }
          else {
            $comercio->impuesto_id7 = 0;
          }
          if ($request->impuesto_id8 != null) {
            $comercio->impuesto_id8 = $request->impuesto_id8;
          }
          else {
            $comercio->impuesto_id8 = 0;
          }


          //REQUISITOS
          if ($request->requisito_id1 != null) {
            $comercio->requisito_id1 = $request->requisito_id1;
          }
          else {
            $comercio->requisito_id1 = 0;
          }
          if ($request->requisito_id2 != null) {
            $comercio->requisito_id2 = $request->requisito_id2;
          }
          else {
            $comercio->requisito_id2 = 0;
          }
          if ($request->requisito_id3 != null) {
            $comercio->requisito_id3 = $request->requisito_id3;
          }
          else {
            $comercio->requisito_id3 = 0;
          }
          if ($request->requisito_id4 != null) {
            $comercio->requisito_id4 = $request->requisito_id4;
          }
          else {
            $comercio->requisito_id4 = 0;
          }
          if ($request->requisito_id5 != null) {
            $comercio->requisito_id5 = $request->requisito_id5;
          }
          else {
            $comercio->requisito_id5 = 0;
          }
          if ($request->requisito_id6 != null) {
            $comercio->requisito_id6 = $request->requisito_id6;
          }
          else {
            $comercio->requisito_id6 = 0;
          }
          if ($request->requisito_id7 != null) {
            $comercio->requisito_id7 = $request->requisito_id7;
          }
          else {
            $comercio->requisito_id7 = 0;
          }
          if ($request->requisito_id8 != null) {
            $comercio->requisito_id8 = $request->requisito_id8;
          }
          else {
            $comercio->requisito_id8 = 0;
          }
          //pqr

          $comercio->pqr = $request->pqr;

          // QR
          $qrcode = new BaconQrCodeGenerator;
  				$qrcode->format('png')->size('300')->generate('http://localhost:8000/actividad?id='.$request->nit , public_path().'/qrcodes/'.$request->nit.'.png');
  				$ruta_qr = public_path().'/qrcodes/';
  				$imagenOriginal_qr = public_path().'/qrcodes/'.$request->nit.'.png';
  				$imagen_qr = Image::make($imagenOriginal_qr);
  				$temp_name_qr = $request->nit.'.png';

  				$imagen_qr->save($ruta_qr.$temp_name_qr, 100);
  				Storage::disk('public')->put($temp_name_qr, file_get_contents($imagenOriginal_qr) );
  				$comercio->qr = $temp_name_qr;
          $comercio->save();
          session()->flash('mensaje', 'Comercio creado con éxito!');
          return redirect()->route('comercio.show', $comercio->id);
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comercio $comercio)
    {
        $com = DB::table('comercios')
                  ->join('barrios', 'comercios.barrio_id', '=', 'barrios.id')
                  ->select('comercios.*', 'barrios.name', 'barrios.upz')
                  ->where('comercios.id', '=', $comercio->id )
                  ->first();
        $datos = DatosLocal::where('comercio_id', $comercio->id)->first();
        $gestion = GestionMercado::where('comercio_id', $comercio->id)->first();

        $redes = Redes::where('comercio_id', $comercio->id)->first();
        $rep = Representante::where('comercio_id', $comercio->id)->first();
        return view('comercios.show', compact('comercio', 'datos', 'gestion', 'redes', 'rep', 'com'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comercio $comercio)
    {
      $com = DB::table('comercios')
                ->join('barrios', 'comercios.barrio_id', '=', 'barrios.id')
                ->select('comercios.*', 'barrios.name', 'barrios.upz')
                ->where('comercios.id', '=', $comercio->id )
                ->first();

        $requisitos = Requisito::orderBy('name', 'ASC')->get();
        $impuestos = Impuestos::orderBy('name', 'ASC')->get();
        $barrios = Barrios::orderBy('name', 'ASC')->get();
        return view('comercios.edit', compact('com', 'barrios', 'impuestos', 'requisitos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comercio $comercio)
    {
      if ($request->logo != null) {
        $ruta = public_path().'/images/logo/';
        $imagenOriginal = $request->file('logo');
        $imagen = Image::make($imagenOriginal);
        $temp_name = $request->nit . '.' . $imagenOriginal->getClientOriginalName();

        $imagen->save($ruta.$temp_name, 100);
        Storage::disk('public')->put($temp_name, file_get_contents($imagenOriginal->getRealPath() ) );
        $comercio->logo = $temp_name;

      }
      $comercio->tipoPersona = $request->tipoPersona;
      $comercio->nit = $request->nit;
      $comercio->nombre = $request->nombre;
      $comercio->dirEstablecimiento = $request->dirEstablecimiento;
      $comercio->barrio_id = $request->barrio;
      $comercio->dirNotificaciones = $request->dirNotificaciones;
      $comercio->actComercial = $request->actComercial;
      $comercio->categoria = $request->categoria;
      $comercio->telefono = $request->telefono;
      $comercio->celular = $request->celular;
      $comercio->email = $request->email;

      //Impuestos
      if ($request->impuesto_id1 != null) {
        $comercio->impuesto_id1 = $request->impuesto_id1;
      }
      else {
        $comercio->impuesto_id1 = 0;
      }
      if ($request->impuesto_id2 != null) {
        $comercio->impuesto_id2 = $request->impuesto_id2;
      }
      else {
        $comercio->impuesto_id2 = 0;
      }
      if ($request->impuesto_id3 != null) {
        $comercio->impuesto_id3 = $request->impuesto_id3;
      }
      else {
        $comercio->impuesto_id3 = 0;
      }
      if ($request->impuesto_id4 != null) {
        $comercio->impuesto_id4 = $request->impuesto_id4;
      }
      else {
        $comercio->impuesto_id4 = 0;
      }
      if ($request->impuesto_id5 != null) {
        $comercio->impuesto_id5 = $request->impuesto_id5;
      }
      else {
        $comercio->impuesto_id5 = 0;
      }
      if ($request->impuesto_id6 != null) {
        $comercio->impuesto_id6 = $request->impuesto_id6;
      }
      else {
        $comercio->impuesto_id6 = 0;
      }
      if ($request->impuesto_id7 != null) {
        $comercio->impuesto_id7 = $request->impuesto_id7;
      }
      else {
        $comercio->impuesto_id7 = 0;
      }
      if ($request->impuesto_id8 != null) {
        $comercio->impuesto_id8 = $request->impuesto_id8;
      }
      else {
        $comercio->impuesto_id8 = 0;
      }


      //REQUISITOS
      if ($request->requisito_id1 != null) {
        $comercio->requisito_id1 = $request->requisito_id1;
      }
      else {
        $comercio->requisito_id1 = 0;
      }
      if ($request->requisito_id2 != null) {
        $comercio->requisito_id2 = $request->requisito_id2;
      }
      else {
        $comercio->requisito_id2 = 0;
      }
      if ($request->requisito_id3 != null) {
        $comercio->requisito_id3 = $request->requisito_id3;
      }
      else {
        $comercio->requisito_id3 = 0;
      }
      if ($request->requisito_id4 != null) {
        $comercio->requisito_id4 = $request->requisito_id4;
      }
      else {
        $comercio->requisito_id4 = 0;
      }
      if ($request->requisito_id5 != null) {
        $comercio->requisito_id5 = $request->requisito_id5;
      }
      else {
        $comercio->requisito_id5 = 0;
      }
      if ($request->requisito_id6 != null) {
        $comercio->requisito_id6 = $request->requisito_id6;
      }
      else {
        $comercio->requisito_id6 = 0;
      }
      if ($request->requisito_id7 != null) {
        $comercio->requisito_id7 = $request->requisito_id7;
      }
      else {
        $comercio->requisito_id7 = 0;
      }
      if ($request->requisito_id8 != null) {
        $comercio->requisito_id8 = $request->requisito_id8;
      }
      else {
        $comercio->requisito_id8 = 0;
      }

      // Descripción e imagen

      if ($request->descripcion != null) {
          $comercio->descripcion = $request->descripcion;
      }


      $comercio->etiquetas = $request->etiquetas;






      // dd($request);
      $comercio->save();
      session()->flash('mensaje', 'Comercio actualizado con éxito!');
      return redirect()->route('comercio.show', $comercio->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comercio $comercio)
    {
      $m = Comercio::find($comercio->id)->delete();
      session()->flash('mensaje', 'Comercio eliminado con éxito!');
      return back();
    }


    // DATOS IMPUESTOS

    public function createImpuestos(Comercio $comercio)
    {
        $impuestos = Impuestos::orderBy('ASC', 'name');
        return view('impuestos.create', compact('comercio', 'impuestos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeImpuestos(Request $request)
    {
        $i = Comercio::where('id', $request->id)->first();
        $i->impuesto_id1 = $request->impuesto_id1;
        session()->flash('mensaje', 'Datos del comercio actualizados!');
        return redirect()->route('comercio.show', $i->comercio_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function showImpuestos(Impuestos $impuestos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function editImpuestos(Comercio $comercio)
    {
        $impuestos = Impuestos::orderBy('ASC', 'name');
        return view('impuestos.edit', compact('impuestos', 'comercio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function updateImpuestos(Request $request, Comercio $comercio)
    {
      $p = Impuestos::find($impuestos->id)->update($request->all());
      session()->flash('mensaje', 'Ficha actualizada con éxito!');
      return redirect()->route('comercio.show', $impuestos->comercio_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Impuestos  $impuestos
     * @return \Illuminate\Http\Response
     */
    public function destroyImpuestos(Impuestos $impuestos)
    {
      $m = Impuestos::find($impuestos->id)->delete();
      session()->flash('mensaje', 'Ficha eliminada con éxito!');
      return back();
    }
}
