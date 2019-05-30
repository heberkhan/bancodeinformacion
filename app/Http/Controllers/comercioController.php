<?php

namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
use Illuminate\Http\Request;
use App\Http\Requests\CrearComercio;
use Illuminate\Support\Facades\Storage;
use App\Comercio;
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


class comercioController extends Controller
{
	//VISTAS


    public function getActividades()
    {
    	$actividades = Actividade::all();
    	$data = [];
    	$data[0] = [
    		'id' => 0,
    		'text' => 'Seleccione una actividad',
    	];
    	foreach ($actividades as $key => $value) {
    		$data[$key+1] = [
    			'id' => $value->id,
    			'text' => $value->name,
    		];
    	}
    	return response()->json($data);
    }

    public function getCategorias($id)
    {
    	$categorias = Categoria::where('actividades_id', $id)->get();
    	$data=[];
    	$data[0] = [
    		'id'=> 0,
    		'text' => 'Seleccione una Categoría',
    	];

    	foreach ($categorias as $key => $value) {
    		$data[$key+1] = [
    			'id' => $value->id,
    			'text' => $value->name
    		];

    	}
    	return response()->json($data);
    }



    public function crearCategoriaView()
    {
        return view('crearCategorias');
    }



    //CRUD CATEGORÍAS

    // CREAR

    public function crearCategoria(Request $request)
    {
    	$categoria = Categorias::where('codigoCIIU', $request->ciiu)->first();
    	if ($categoria) {
    		return view('crearCategorias');
    	}
    	else {
    		$categoria = new Categorias;
    		$categoria->codigoCiiu = $request->ciiu;
    		$categoria->nombreActividad = $request->name;
    		$categoria->save();
    		return view('crearCategorias');
    	}
    }

    // LEER

	 public function listarCategorias()
	    {
	    	$categorias = Categorias::paginate(10);


	        return view('listarCategorias', ['categorias' => $categorias]);

	    }


	// BUSCADOR

        public function buscador(Request $request)
        {
            $textos = Texts::where('id', '1')->first();
            $images = Images::where('id', '1')->first();
            $etiquetas = $request->get('buscar');
            $comercios = Comercio::orderBy('id', 'DESC')
            ->Search($etiquetas)
            ->paginate(6);
            $mensaje= "";
            if (!$comercios) {
                $mensaje = "No se encontraron comercios para esta categoría";
                return view('error', ['mensaje'=> $mensaje, 'titulo'=> $titulo] );
            }
            else
            {
            return view('resultados', compact('comercios', 'textos', 'images'));
            }

        }

        public function buscadorAdmin(Request $request)
        {

            $etiquetas = $request->get('buscar');
            $comercios = Comercio::orderBy('id', 'DESC')
            ->Search($etiquetas)
            ->paginate(6);
            $mensaje= "";
            if (!$comercios) {
                $mensaje = "No se encontraron comercios para esta categoría";
                return view('error', ['mensaje'=> $mensaje, 'titulo'=> $titulo] );
            }
            else
            {
            return view('listarComercios', compact('comercios'));
            }

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
    			return view('error', ['mensaje'=> $mensaje, 'titulo'=> $titulo], compact('textos', 'images') );

    		}
    		else {
    			return view('mostrarComercio', ['comercios' => $comercios, 'titulo' => $titulo], compact('textos', 'images') );
    		}

    	}

    public function mostrarUnico(Request $request)
    {
      $textos = Texts::where('id', '1')->first();
      $images = Images::where('id', '1')->first();
    	$comercio = Comercio::where('id', $request->id)->first();
		$titulo = $comercio->nombre;
		$qrcode = new BaconQrCodeGenerator;
				$qrcode->format('png')->size('300')->generate('http://localhost:8000/actividad?id='.$comercio->id , '../public/qrcodes/'.$comercio->id.'.png');

				$ruta_qr = public_path().'/qrcodes/';
				$imagenOriginal_qr = public_path().'/qrcodes/'.$comercio->id.'.png';
				$imagen_qr = Image::make($imagenOriginal_qr);
				$temp_name_qr = $comercio->id.'.png';

				$imagen_qr->save($ruta_qr.$temp_name_qr, 100);
				Storage::disk('public')->put($temp_name_qr, file_get_contents($imagenOriginal_qr) );
				$comercio->qr = $temp_name_qr;
				$comercio->save();

    	return view('mostrar', ['comercio' => $comercio, 'titulo' => $titulo], compact('textos', 'images'));
    }

    public function pdf(Request $request)
    {
    	$comercio = Comercio::where('id', $request->idPDF)->first();
        $pdf = PDF::loadView('pdf.imprimible', ['comercio'=>$comercio]);
    	//return view('pdf.imprimible', compact('comercio'));
        return $pdf->download('imprimible.pdf');

    }




}
