<?php

namespace App\Http\Controllers;


use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
use Illuminate\Http\Request;
use App\Http\Requests\CrearComercio;
use Illuminate\Support\Facades\Storage;
use App\Comercio;
use App\Barrios;
use Image;
use App\Actividade;
use App\Categoria;
use App\Mensaje;
use App\MsjContacto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Barryvdh\DomPDF\Facade as PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function crearComercioView ()
    {

        $barrios = Barrios::get();
        return view('crearComercio', compact('barrios'));
    }

    public function crearComercio(CrearComercio $request)
    {

        $comercio = Comercio::where('nombre', $request->nombreEstablecimiento)->first();
        if ($comercio) {
            session()->flash('mensaje', 'Comercio ya existente!');
            return view('crearComercio');
        }
        else {

            //logo

                $ruta = public_path().'/images/logo/';
                $imagenOriginal = $request->file('logo');
                $imagen = Image::make($imagenOriginal);
                $temp_name = time() . '.' . $imagenOriginal->getClientOriginalName();
                $imagen->resize(300,300);
                $imagen->save($ruta.$temp_name, 100);
                Storage::disk('public')->put($temp_name, file_get_contents($imagenOriginal->getRealPath() ) );
          // Datos Básicos del comercio
            $comercio = new Comercio;
            $comercio->tipoPersona = $request->tipoPersona;
            $comercio->nit = $request->nit;
            $comercio->nombre = $request->nombreEstablecimiento;
            $comercio->email = $request->email;
            $comercio->dirEstablecimiento = $request->dirEstablecimiento;
            $comercio->barrio = $request->barrio;
            $comercio->dirNotificaciones = $request->dirNotificaciones;
            $comercio->actComercial = $request->actComercial;
            $comercio->categoria = $request->categoria;
            $comercio->telefono = $request->telefono;
            $comercio->celular = $request->celular;
            $comercio->inicioActividades = $request->inicioActividades;
            $comercio->consumoEnergia = $request->consumoEnergia;
            $comercio->viaPrincipal = $request->viaPrincipal;
            $comercio->duenoTrabaja = $request->duenoTrabaja;
            $comercio->lunes = $request->lunes;
            $comercio->martes = $request->martes;
            $comercio->miercoles = $request->miercoles;
            $comercio->jueves = $request->jueves;
            $comercio->viernes = $request->viernes;
            $comercio->sabado = $request->sabado;
            $comercio->domingo = $request->domingo;
            $comercio->horario = $request->horario;
            $comercio->cantTrabajadores = $request->cantTrabajadores;
            $comercio->tipoLocal = $request->tipoLocal;
            $comercio->areaLocal = $request->areaLocal;
            $comercio->avisos = $request->avisos;
            $comercio->ventasPromedio = $request->ventasPromedio;
            // Descripción e imagen
            $comercio->descripcion = $request->descripcion;
            $comercio->logo = $temp_name;
            // $comercio->qr = $temp_name_qr;
            // Redes sociales e internet
            $comercio->facebook = $request->facebook;
            $comercio->twitter = $request->twitter;
            $comercio->instagram = $request->instagram;
            $comercio->url = $request->url;
            $comercio->lat = $request->lat;
            $comercio->long = $request->long;
            // Datos del Representante Legal
            $comercio->nombreRepresentante = $request->nombreRepresentante;
            $comercio->cc = $request->cc;
            $comercio->dirNotificacionRep = $request->dirNotificacionRep;
            $comercio->nivelEstudio = $request->nivelEstudio;
            $comercio->telRepresentante = $request->telRepresentante;
            $comercio->celRepresentante = $request->celRepresentante;
            $comercio->waRepresentante = $request->waRepresentante;
            // Estado del Contribuyente
            $comercio->rut = $request->rut;
            $comercio->camaraComercio = $request->camaraComercio;
            $comercio->rtiyc = $request->rtiyc;
            $comercio->usoSuelos = $request->usoSuelos;
            $comercio->diiyc = $request->diiyc;
            $comercio->saycoAcinpro = $request->saycoAcinpro;
            $comercio->sanidad = $request->sanidad;
            $comercio->manejoAlimentos = $request->manejoAlimentos;
            $comercio->bomberos = $request->bomberos;
            $comercio->libroDiario = $request->libroDiario;
            $comercio->ciyc = $request->ciyc;

            // Datos del contribuyente
            $comercio->economiaDigital = $request->economiaDigital;
            $comercio->internetAyuda = $request->internetAyuda;
            $comercio->equipoVentas = $request->equipoVentas;
            $comercio->manejaSoftware = $request->manejaSoftware;

            $comercio->ampliarNegocio = $request->ampliarNegocio;
            $comercio->emailD = $request->emailD;
            $comercio->twitterD = $request->twitterD;
            $comercio->facebookD = $request->facebookD;
            $comercio->instagramD = $request->instagramD;
            $comercio->whatsappD = $request->whatsappD;
            $comercio->youtubeD = $request->youtubeD;
            $comercio->otroD = $request->otroD;
            $comercio->usaInternet = $request->usaInternet;
            $comercio->usaEmail = $request->usaEmail;
            $comercio->usaDrive = $request->usaDrive;
            $comercio->usaFacebook = $request->usaFacebook;
            $comercio->usaTwitter = $request->usaTwitter;
            $comercio->usaInstagram = $request->usaInstagram;
            $comercio->usaYoutube = $request->usaYoutube;
            $comercio->usaWhatsapp = $request->usaWhatsapp;
            $comercio->usaEditores = $request->usaEditores;
            $comercio->usaWord = $request->usaWord;
            $comercio->interesaPublicidadRedes = $request->interesaPublicidadRedes;
            $comercio->inversionPublicidad = $request->inversionPublicidad;
            $comercio->etiquetas = $request->etiquetas;
            $comercio->save();
            session()->flash('mensaje', 'Comercio creado con éxito!');
            return view('crearComercio');
        }
    }

    public function listarComercios()
    {

            $comercios = Comercio::paginate(10);

            return view('listaComercios', compact('comercios'));


    }

    //ACTUALIZAR

        public function actualizarComercioView(Request $request)
        {
            $comercio = Comercio::where('id', $request->id)->first();
            return view('actualizarComercio', ['comercio' => $comercio]);
        }

        public function actualizarComercio(ActualizarComercio $request)
        {
            //logo

                $ruta = public_path().'/images/logo/';
                $imagenOriginal = $request->file('logo');
                $imagen = Image::make($imagenOriginal);
                $temp_name = time() . '.' . $imagenOriginal->getClientOriginalName();
                $imagen->resize(300,300);
                $imagen->save($ruta.$temp_name, 100);
                Storage::disk('public')->put($temp_name, file_get_contents($imagenOriginal->getRealPath() ) );

            $comercio = Comercio::where('id', $request->id)->first();
            $comercio->tipoPersona = $request->tipoPersona;
            $comercio->nit = $request->nit;
            $comercio->nombre = $request->nombreEstablecimiento;
            $comercio->email = $request->email;
            $comercio->dirEstablecimiento = $request->dirEstablecimiento;
            $comercio->barrio = $request->barrio;
            $comercio->dirNotificaciones = $request->dirNotificaciones;
            $comercio->actComercial = $request->actComercial;
            $comercio->categoria = $request->categoria;
            $comercio->telefono = $request->telefono;
            $comercio->celular = $request->celular;
            $comercio->inicioActividades = $request->inicioActividades;
            $comercio->consumoEnergia = $request->consumoEnergia;
            $comercio->viaPrincipal = $request->viaPrincipal;
            $comercio->duenoTrabaja = $request->duenoTrabaja;
            $comercio->lunes = $request->lunes;
            $comercio->martes = $request->martes;
            $comercio->miercoles = $request->miercoles;
            $comercio->jueves = $request->jueves;
            $comercio->viernes = $request->viernes;
            $comercio->sabado = $request->sabado;
            $comercio->domingo = $request->domingo;
            $comercio->horario = $request->horario;
            $comercio->cantTrabajadores = $request->cantTrabajadores;
            $comercio->tipoLocal = $request->tipoLocal;
            $comercio->areaLocal = $request->areaLocal;
            $comercio->avisos = $request->avisos;
            $comercio->ventasPromedio = $request->ventasPromedio;
            // Descripción e imagen
            $comercio->descripcion = $request->descripcion;
            $comercio->logo = $temp_name;
            // Redes sociales e internet
            $comercio->facebook = $request->facebook;
            $comercio->twitter = $request->twitter;
            $comercio->instagram = $request->instagram;
            $comercio->url = $request->url;
            $comercio->lat = $request->lat;
            $comercio->long = $request->long;
            // Datos del Representante Legal
            $comercio->nombreRepresentante = $request->nombreRepresentante;
            $comercio->cc = $request->cc;
            $comercio->dirNotificacionRep = $request->dirNotificacionRep;
            $comercio->nivelEstudio = $request->nivelEstudio;
            $comercio->telRepresentante = $request->telRepresentante;
            $comercio->celRepresentante = $request->celRepresentante;
            $comercio->waRepresentante = $request->waRepresentante;
            // Estado del Contribuyente
            $comercio->rut = $request->rut;
            $comercio->camaraComercio = $request->camaraComercio;
            $comercio->rtiyc = $request->rtiyc;
            $comercio->usoSuelos = $request->usoSuelos;
            $comercio->diiyc = $request->diiyc;
            $comercio->saycoAcinpro = $request->saycoAcinpro;
            $comercio->sanidad = $request->sanidad;
            $comercio->manejoAlimentos = $request->manejoAlimentos;
            $comercio->bomberos = $request->bomberos;
            $comercio->libroDiario = $request->libroDiario;
            $comercio->ciyc = $request->ciyc;

            // Datos del contribuyente
            $comercio->economiaDigital = $request->economiaDigital;
            $comercio->internetAyuda = $request->internetAyuda;
            $comercio->equipoVentas = $request->equipoVentas;
            $comercio->manejaSoftware = $request->manejaSoftware;

            $comercio->ampliarNegocio = $request->ampliarNegocio;
            $comercio->emailD = $request->emailD;
            $comercio->twitterD = $request->twitterD;
            $comercio->facebookD = $request->facebookD;
            $comercio->instagramD = $request->instagramD;
            $comercio->whatsappD = $request->whatsappD;
            $comercio->youtubeD = $request->youtubeD;
            $comercio->otroD = $request->otroD;
            $comercio->usaInternet = $request->usaInternet;
            $comercio->usaEmail = $request->usaEmail;
            $comercio->usaDrive = $request->usaDrive;
            $comercio->usaFacebook = $request->usaFacebook;
            $comercio->usaTwitter = $request->usaTwitter;
            $comercio->usaInstagram = $request->usaInstagram;
            $comercio->usaYoutube = $request->usaYoutube;
            $comercio->usaWhatsapp = $request->usaWhatsapp;
            $comercio->usaEditores = $request->usaEditores;
            $comercio->usaWord = $request->usaWord;
            $comercio->interesaPublicidadRedes = $request->interesaPublicidadRedes;
            $comercio->inversionPublicidad = $request->inversionPublicidad;
            $comercio->etiquetas = $request->etiquetas;
            $comercio->save();
            session()->flash('mensaje', 'Comercio actualizado con éxito!');
            return view('home');

        }

        //MENSAJES

        public function verMensajes()
    {
        $nuevosPQR = 0;
        $nuevosCont = 0;
        $mensajesCont = MsjContacto::orderBy('id', 'desc')->get();
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
