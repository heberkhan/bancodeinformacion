<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Mensajes;
use App\Http\Requests\Mensajescont;
use App\Mensaje;
use App\MsjContacto;
use App\Comercio;
use App\Texts;
class MensajesController extends Controller
{
    public function enviarMensaje(Mensajes $Request)
    {
    	$comercio = Comercio::where('id', $Request->idPQR)->first();
		$titulo = $comercio->nombre;

    	$mensaje = new Mensaje;
    	$mensaje->nombrePQR = $Request->nombrePQR;
    	$mensaje->emailPQR	= $Request->emailPQR;
    	$mensaje->mensajePQR= $Request->mensajePQR;
    	$mensaje->asuntoPQR = $Request->asuntoPQR;
    	$mensaje->leidoPQR = $Request->leidoPQR;
    	$mensaje->save();
    	session()->flash('mensaje', 'Mensaje enviado con éxito!');
    	return redirect('inicio');
    }



    // CONTACTO

    public function contacto()
    {
      $textos = Texts::where('id', '1')->first();
    	return view('contacto', compact('textos'));
    }

    public function MsjContacto(Mensajescont $Request)
    {
    	$mensaje = new MsjContacto;
    	$mensaje->nombreCont = $Request->nombreCont;
    	$mensaje->emailCont	= $Request->emailCont;
    	$mensaje->mensajeCont= $Request->mensajeCont;
    	$mensaje->asuntoCont = $Request->asuntoCont;
    	$mensaje->leidoCont = $Request->leidoCont;
    	$mensaje->save();
    	session()->flash('mensaje', 'Mensaje enviado con éxito!');
    	return redirect('contacto');
    }


}
