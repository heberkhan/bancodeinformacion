@extends('layout.tema')
@section('contenido')
<!DOCTYPE html>
<html>
<head>
	<title></title>




<body>
	<div class="main-page">
				<!--grids-->

				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>BIENVENIDO</h2>
					</div>
					<div class="panel panel-widget">
						<div class="chute chute-center text-center">
							<div class="row mb40">
								<div class="col-md-12">

									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
										  <!-- Indicators -->
										  <ol class="carousel-indicators">
										    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
										    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
										    <li data-target="#carousel-example-generic" data-slide-to="2"></li>

										  </ol>

										  <!-- Wrapper for slides -->
										  <div class="carousel-inner" role="listbox">

										    <div class="item active">
										      <img src="images/slider/{{$images->slider1}}" alt="...">
										      <div class="carousel-caption">

										      </div>
										    </div>
										    <div class="item">
										      <img src="images/slider/{{$images->slider2}}" alt="...">
										      <div class="carousel-caption">

										      </div>
										    </div>
										    <div class="item">
										      <img src="images/slider/{{$images->slider3}}" alt="...">
										      <div class="carousel-caption">

										      </div>
										    </div>

										  </div>

										  <!-- Controls -->
										  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
										    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
										    <span class="sr-only">Anterior</span>
										  </a>
										  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
										    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
										    <span class="sr-only">Siguiente</span>
										  </a>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="col-md-12">
										<h2>{{$textos->titulo}}</h2>
										<p>{{$textos->txtPrincipal}}</p>
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
