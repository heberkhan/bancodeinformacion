@extends('layout.tema')
@section('contenido')


			<div class="main-page">
				<!--grids-->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Resultados</h2>
					</div>
					<div class="panel panel-widget">
						<div class="chute chute-center text-center">

							<div class="row mb40">

								@foreach($comercios as $comercio)

								<div class="col-md-4">
									<div class="demo-grid">
										<img src="images/logo/{{ $comercio->logo }}" style="width:100%; height:auto;">
										<p><strong>{{ $comercio->nombre }}</strong></p><br>
										<p align="left">
											<span style="color: Tomato;"> <i class="fas fa-home"></i></span> {{ $comercio->dirEstablecimiento }}

										</p>
										<p align="left">
											<span style="color: #0080FF;"> <i class="fas fa-phone"></i></span>
											@if($comercio->telefono !=null)
											{{ $comercio->telefono}} -
											@endif
											<span style="color: #04B404;"> <i class="fas fa-mobile-alt"></i></span>
											{{$comercio->celular }}</p><br>
											<form class="" action="{{route('mostrarUnico')}}" method="get">
												<input type="hidden" name="id" value="{{$comercio->nit}}">
												<button type="submit" class="btn btn-primary">Ver Más <i class="fas fa-angle-right"></i></button>
											</form>
										<!--  -->

									</div>

								</div>


								@endforeach

								<div class="clearfix"> </div>
							</div>

						</div>
					</div>
				</div>
			</div>
			<!--//grids-->

			<div class="grids">

				<div class="panel panel-widget">
					<div class="chute chute-center text-center">
						<div class="row mb40">
							<div class="col-md-12">


								<div class="clearfix"> </div>
							</div>
							<div class="col-md-4">
									<img src="images/identidad/logo2.png" alt="logo" />
							</div>
							<div class="col-md-4">
									<h2>Síguenos en Redes Sociales</h2>
									<a href="{{$textos->facebook}}" target="_Blank"><img src="images/facebook.png" style="width: 45px; height: 45px;"></a>
									<a href="{{$textos->twitter}}" target="_Blank"><img src="images/twitter.jpg" style="width: 45px; height: 45px;"></a>
									<a href="{{$textos->instagram}}" target="_Blank"><img src="images/instagram.png" style="width: 45px; height: 45px;"></a>
							</div>
							<div class="col-md-4">
									<h2 align="left">Contacto</h2><br><br>
									<p align="left">
										<span style="color: #FE2E2E;"><i class="fas fa-home"></i></span>  {{$textos->direccion}}<br></p>
									<p style="text-align:left">
										<span style="color: #2ECCFA;"><i class="fas fa-phone"></i></span>  {{$textos->telefono1}} <br>
									</p>
									<p align="left">
										<span style="color: #FE2E2E;"> <i class="fas fa-mobile-alt"></i></span>  {{$textos->telefono2}}<br>
									</p>
									<p align="left">
										<span style="color: #2ECCFA;"><i class="fas fa-envelope-open-text"></i></span>  {{$textos->email1}}</p>
									</p>

							</div>

						</div>
					</div>
				</div>


			</div>


@endsection
