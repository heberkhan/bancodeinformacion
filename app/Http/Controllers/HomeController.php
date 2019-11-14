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
use App\Msjcontacto;
use App\User;
use App\Impuestos;
use App\Requisito;
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
        $comercios = Comercio::count();
        $users = User::count();
        $imp = Impuestos::count();
        $req = Requisito::count();
        return view('home', compact('comercios', 'users', 'imp', 'req'));
    }

    //MENSAJES


}
