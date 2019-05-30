@extends('layout.tema')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="main-page">
				<!--grids-->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>{{$titulo}}</h2>
					</div>
					<div class="panel panel-widget">
						<div class="chute chute-center text-center">
							<div class="row mb40">
								<div class="col-md-12">
										<div class="demo-grid">
											<img src="images/p1.png" style="width:100%; height:600px; ">
										</div>
										<h2>{{$mensaje}}</h2>

								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="grids">

	        <div class="panel panel-widget">
	          <div class="chute chute-center text-center">
	            <div class="row mb40">
	              <div class="col-md-12">


	                <div class="clearfix"> </div>
	              </div>
	              <div class="col-md-4">
	                  <img src="images/identidad/logo_castilla.png" alt="" />
	              </div>
	              <div class="col-md-4">
	                  <h2>Síguenos en Redes Sociales</h2>
	                  <a href="{{$textos->facebook}}" target="_Blank"><img src="images/facebook.png" style="width: 45px; height: 45px;"></a>
	                  <a href="{{$textos->twitter}}" target="_Blank"><img src="images/twitter.jpg" style="width: 45px; height: 45px;"></a>
	                  <a href="{{$textos->instagram}}" target="_Blank"><img src="images/instagram.png" style="width: 45px; height: 45px;"></a>
	              </div>
	              <div class="col-md-4">
	                  <h2>Contacto</h2>
	                  <p>Dirección: {{$textos->direccion}}<br>
	                    Teléfonos: {{$textos->telefono1}} - {{$textos->telefono2}}<br>
	                    Email: {{$textos->email1}}</p>
	              </div>

	            </div>
	          </div>
	        </div>


	      </div>
</div>
</body>
</html>

@endsection
