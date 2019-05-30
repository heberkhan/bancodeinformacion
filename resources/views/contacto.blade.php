@extends('layout.tema')
@section('contenido')

<div class="main-page">
				<!--grids-->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Contacto</h2>
					</div>
					<div class="panel panel-widget">

						<div class="chute chute-center">
							<div class="row mb40">
								<div class="col-md-6">

									<div class="well">
										<p>
											Dirección: {{$textos->direccion}} <br>
											Teléfonos: {{$textos->telefono1}} - {{$textos->telefono2}} <br>
											Email: {{$textos->email1}}
										</p>

									</div>
								</div>
								<div class="col-md-6">
									<div>
										<h2>Redes Sociales e Internet</h2>
										<div class="clearfix"> </div>
									</div>
									<div >
										<a href="{{$textos->facebook}}" target="_Blank"><img src="images/facebook.png" style="width: 45px; height: 45px;"></a>
										<a href="{{$textos->twitter}}" target="_Blank"><img src="images/twitter.jpg" style="width: 45px; height: 45px;"></a>
										<a href="{{$textos->instagram}}" target="_Blank"><img src="images/instagram.png" style="width: 45px; height: 45px;"></a>
									</div>
								</div>


								</div>
							</div>
						</div>


					<div class="form-grids widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>¿Algo que contarnos?</h4>
								</div>
								<div class="form-body">
									<form action="{{ route('MsjContacto') }}">
										<div class="form-group">
											<label for="exampleInputEmail1">Email</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="emailCont" value="{{ old('emailCont') }}">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Nombres</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombres" name="nombreCont" value="{{ old('nombreCont') }}">
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Mensaje</label>
											<div class="col-sm-8"><textarea name="mensajeCont" id="txtarea1" cols="50" rows="4" class="form-control1" value="{{ old('mensajeCont') }}"></textarea></div>
										</div>
										<input type="hidden" name="asuntoCont" value="Formulario de Contacto">
										<input type="hidden" name="leidoCont" value="0">

										<button type="submit" class="btn btn-default">Enviar</button> </form>
								</div>
							</div>
					</div>
					</div>
				</div>
</div>
			<!--//grids-->

@endsection
