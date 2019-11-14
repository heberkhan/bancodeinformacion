<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Mensajes;
use App\Http\Requests\Mensajescont;
use App\Mensaje;
use App\MsjContacto;
use App\Comercio;
use App\Texts;
use Mail;
use App\Mail\SendMailable;
class MensajesController extends Controller
{
    public function enviarMensaje(Mensajes $request)
    {
    	$comercio = Comercio::where('id', $request->idPQR)->first();
		  $titulo = $comercio->nombre;



        // $data = ['usuario'=>$usuario->email, 'tipo'=>'Producto', 'nombre'=>$product->nombreCompleto,'estado'=>'creado']; // Empty array
        // Mail::send('emails.mailEjemplo', $data, function($message) use ($administrador)
        //   {
        //     $message->to($administrador->email, 'CastillaVende')->subject('Producto Creado!');
        //   });
          Mail::send('emails.pqr', $request->all(), function($msj){

        		$msj->subject('PQR de'. $titulo});
        		$msj->to('heberkhan@gmail.com', 'Banco de información IYC');
          });
      $comercio->pqr = $comercio->pqr + 1;
      $comercio->save();
    	session()->flash('mensaje', 'Mensaje enviado con éxito!');
    	return back();

  }



    // CONTACTO

    public function contacto()
    {
      $textos = Texts::where('id', '1')->first();
    	return view('front.contacto', compact('textos'));
    }

    public function MsjContacto(Mensajescont $Request)
    {
      Mail::send('emails.contacto', $request->all(), function($msj){

        $msj->subject('Mensaje de Contacto en Banco de información IYC');
        $msj->to('heberkhan@gmail.com', 'Banco de información IYC');
        $msj->from('contacto@bancodeinformacioniyc.gov.co', 'Banco de información IYC');
      });
    	session()->flash('mensaje', 'Mensaje enviado con éxito!');
    	return redirect('contacto');
    }

    public function verMensajes()
{
    $nuevosPQR = 0;
    $nuevosCont = 0;
    $mensajesCont = Msjcontacto::orderBy('id', 'desc')->get();
    $mensajes = Mensaje::orderBy('id', 'desc')->get();

    foreach ($mensajes as $key => $leidoPQR) {
        if ($leidoPQR->leidoPQR == '0') {
                    $nuevosPQR++;
                }
            }
    foreach ($mensajesCont as $key => $leidoCont) {
                if ($leidoCont->leidoCont == '0') {
                    $nuevosCont++;
                }
            }

    return view('lista_mensajes', ['mensajes' => $mensajes, 'nuevosPQR' => $nuevosPQR, 'mensajesCont' => $mensajesCont, 'nuevosCont' => $nuevosCont]);
}

public function leerMensaje(Request $request)
{
    $mensaje = Mensaje::where('id', $request->idMensaje)->first();
    $mensaje->leidoPQR = 1;
    $mensaje->save();
    return view('mensaje', ['mensaje' => $mensaje]);
}

public function leerMsjContacto(Request $request)
{
    $mensajeCont = MsjContacto::where('id', $request->idMensajeCont)->first();
    $mensajeCont->leidoCont = 1;
    $mensajeCont->save();
    return view('msjContacto')->with(['mensajeCont' => $mensajeCont]);
}


}
