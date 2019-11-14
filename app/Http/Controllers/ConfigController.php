<?php

namespace App\Http\Controllers;
use App\Texts;
use App\Images;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Image;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
      return view('config.index');
    }

    public function identidad(Request $request)
    {
      // LOGO
      if ($request->logo2) {
        $ruta = public_path().'/images/identidad/';
        $imagenOriginal = $request->file('logo2');
        $imagen = Image::make($imagenOriginal);
        $temp_name = 'logo2'. '.'. $imagenOriginal->getClientOriginalExtension();
        
        $imagen->save($ruta.$temp_name, 100);
        Storage::disk('public')->put($temp_name, file_get_contents($imagenOriginal->getRealPath() ) );
      }


      // SLOGAN
      $identidad = Texts::where('id', '1')->first();
      $identidad->slogan = $request->slogan;
      $identidad->save();

    session()->flash('mensaje', 'Identidad actualizado con éxito!');
    return view('config.index');
    }

    public function paginaPrincipal(Request $request)
    {
      $images = Images::where('id', '1')->first();
      // SLIDE 1
      if ($request->slider1) {
        $ruta1 = public_path().'/images/slider/';
        $imagenOriginal1 = $request->file('slider1');
        $imagen1 = Image::make($imagenOriginal1);
        $temp_name1 = 'slider1'. '.'. $imagenOriginal1->getClientOriginalExtension();
        $imagen1->resize(1920,1000);
        $imagen1->save($ruta1.$temp_name1, 100);
        Storage::disk('public')->put($temp_name1, file_get_contents($imagenOriginal1->getRealPath() ) );
        $images->slider1 = $temp_name1;
      }

      // SLIDE 2
      if ($request->slider2) {
        $ruta2 = public_path().'/images/slider/';
        $imagenOriginal2 = $request->file('slider2');
        $imagen2 = Image::make($imagenOriginal2);
        $temp_name2 = 'slider2'. '.'. $imagenOriginal2->getClientOriginalExtension();
        $imagen2->resize(1920,1000);
        $imagen2->save($ruta2.$temp_name2, 100);
        Storage::disk('public')->put($temp_name2, file_get_contents($imagenOriginal2->getRealPath() ) );
        $images->slider2 = $temp_name2;
      }

      // SLIDE 3
      if ($request->slider3) {
        $ruta3 = public_path().'/images/slider/';
        $imagenOriginal3 = $request->file('slider3');
        $imagen3 = Image::make($imagenOriginal3);
        $temp_name3 = 'slider3'. '.'. $imagenOriginal3->getClientOriginalExtension();
        $imagen3->resize(1920,1000);
        $imagen3->save($ruta3.$temp_name3, 100);
        Storage::disk('public')->put($temp_name3, file_get_contents($imagenOriginal3->getRealPath() ) );
        $images->slider3 = $temp_name3;
      }


          $textos = Texts::where('id', '1')->first();
          $textos->titulo = $request->titulo;
          $textos->txtPrincipal = $request->txtPrincipal;
          $textos->save();





          $images->save();

          session()->flash('mensaje', 'Página principal actualizado con éxito!');
          return view('config.index');
    }

    public function contacto(Request $request)
    {
      $contacto = Texts::where('id', '1')->first();
      $contacto->direccion = $request->direccion;
      $contacto->telefono1  = $request->telefono1;
      $contacto->telefono2  = $request->telefono2;
      $contacto->email1  = $request->email1;
      $contacto->email2  = $request->email2;
      $contacto->save();
      session()->flash('mensaje', 'Contacto actualizado con éxito!');
      return view('config.index');
    }

    public function redes(Request $request)
    {
      $redes = Texts::where('id', '1')->first();
      $redes->facebook = $request->facebook;
      $redes->twitter = $request->twitter;
      $redes->instagram = $request->instagram;
      $redes->youtube = $request->youtube;
      $redes->save();
      session()->flash('mensaje', 'Redes actualizado con éxito!');
      return view('config.index');


    }
}
