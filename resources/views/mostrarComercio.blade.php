@extends('layout.tema')
@section('contenido')


			<div class="main-page">
				<!--grids-->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>{{ $titulo }}</h2>
					</div>
					<div class="panel panel-widget">
						<div class="chute chute-center text-center">

							<div class="row mb40">

								@foreach($comercios as $comercio)

									<div class="col-md-4">
										<div class="demo-grid">
											<img src="images/logo/{{ $comercio->logo }}" style="width:100%; height:200px; ">
											<p>{{ $comercio->nombre }}</p>
											<label>Dirección: </label><p>{{ $comercio->dirEstablecimiento }}</p>
											<label>Teléfonos: </label><p>{{ $comercio->telefono}} - {{$comercio->celular }}</p>
											<form action="{{ route('mostrarUnico') }}">
												<input type="hidden" name="id" value="{{$comercio->id}}">
												<button type="submit" class="hvr-shrink">Ver Más</button>
											</form>

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



@endsection
