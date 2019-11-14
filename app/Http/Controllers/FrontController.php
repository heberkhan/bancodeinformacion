<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
use Illuminate\Http\Request;
use App\Http\Requests\CrearComercio;
use Illuminate\Support\Facades\Storage;
use App\Comercio;
use App\Representante;
use App\Impuestos;
use App\Redes;
use App\DatosLocal;
use Image;
use App\Actividade;
use App\Categoria;
use App\Texts;
use App\Images;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Barryvdh\DomPDF\Facade as PDF;


class FrontController extends Controller
{
	//VISTAS

	// BUSCADOR

        public function buscador(Request $request)
        {
            $textos = Texts::where('id', '1')->first();
            $images = Images::where('id', '1')->first();
            $etiquetas = $request->get('buscar');
            if ($etiquetas == null) {
              $mensaje = "No se encontraron comercios para esta categoría";
              return view('front.error', compact('mensaje','textos', 'images'));
            }
            $comercios = Comercio::orderBy('id', 'DESC')
            ->Search($etiquetas)
            ->first();
            $mensaje= "";
            // dd($comercios);
            if ($comercios == null) {
                $mensaje = "No se encontraron comercios para esta categoría";
                return view('front.error', compact('mensaje','textos', 'images'));
            }
            else
            {
              $comercios = Comercio::orderBy('id', 'DESC')
              ->Search($etiquetas)
              ->paginate(6);
            return view('front.resultados', compact('comercios', 'textos', 'images'));
            }

        }

        public function buscadorAdmin(Request $request)
        {

            $etiquetas = $request->get('buscar');
            $comercios = Comercio::orderBy('id', 'DESC')
            ->Search($etiquetas)
            ->paginate(10);
            return view('comercios.resultados', compact('comercios'));


        }





    // RENDER EN EL FRONT

    public function mostrarComercio($categoria)
    	{
        $textos = Texts::where('id', '1')->first();
        $images = Images::where('id', '1')->first();
    		$comercios = Comercio::where('categoria', $categoria)->paginate(6);
    		$noComercios = Comercio::where('categoria', $categoria)->first();
			$titulo = $categoria;
			$mensaje ="";
    		if (!$noComercios) {
    			$mensaje = "No se encontraron comercios para esta categoría";
    			return view('front.error', compact('textos', 'images', 'mensaje', 'titulo') );

    		}
    		else {
    			return view('front.mostrarComercio', compact('textos', 'images', 'comercios', 'titulo') );
    		}

    	}

    public function mostrarUnico(Request $req)
    {
      $com = Comercio::where('nit', $req->id)->first();
      $textos = Texts::where('id', '1')->first();
      $images = Images::where('id', '1')->first();

      $rep = Representante::where('comercio_id', $com->id)->first();
      $redes = Redes::where('comercio_id', $com->id)->first();
      $datos = DatosLocal::where('comercio_id', $com->id)->first();
      // dd($com);


    	return view('front.mostrar', compact('textos', 'images', 'com', 'rep', 'redes', 'datos'));
    }

    public function pdf(Request $request)
    {
      $com = DB::table('comercios')
                ->join('barrios', 'comercios.barrio_id', '=', 'barrios.id')
                ->select('barrios.name', 'comercios.*')
                ->where('comercios.id', $request->idPDF)
                ->first();

      $datos = DatosLocal::where('comercio_id', $request->idPDF)->first();
      return view('pdf.versionImprimible', compact('com', 'datos'));

    }

    public function ayuda()
    {
      $textos = Texts::where('id', '1')->first();
      $images = Images::where('id', '1')->first();
      return view('front.help', compact('textos', 'images'));
    }




}
