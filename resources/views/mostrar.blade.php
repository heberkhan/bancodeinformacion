@extends('layout.tema')
@section('contenido')
<style type="text/css">
  #map1{
  display: block;
  width: 100%;
  height: 310px;
  margin: 0 auto;
  -moz-box-shadow: 0px 5px 20px #ccc;
  -webkit-box-shadow: 0px 5px 20px #ccc;
  box-shadow: 0px 5px 20px #ccc;
}
  </style>
<div class="main-page">
				<!--grids-->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>{{ $titulo }}</h2>
					</div>
					<div class="panel panel-widget">
						<div class="chute chute-center">
							<div class="row mb40">
								<div class="col-md-6">
										<div class="demo-grid">
											<img src="images/logo/{{ $comercio->logo }}" style="width:100%; height:330px; ">

										</div>





								</div>
								<div class="col-md-6">

									<div class="panel panel-widget">

										<div class="span11">
									 		<div id="map1"></div>
								  		</div>
									</div>
										<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d5015.633806604226!2d-73.68871715712513!3d3.82928311641935!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1552948525975" width="100%" height="300" frameborder="0" style="border:1; height: 300px;" allowfullscreen></iframe> -->

								</div>
							</div>
						</div>
						<div class="chute chute-center">
							<div class="row mb40">
								<div class="col-md-6">
									<h2>Información del Establecimiento</h2>
									<div class="well chute-center">
										<h2>{{ $comercio->nombre }}</h2>
										<h4>{{ $comercio->descripcion }}</h4>
										<label>Dirección: </label><p>{{ $comercio->dirEstablecimiento }}</p>
										<label>Teléfonos:</label><p>{{$comercio->telefono}} - {{ $comercio->celular }}</p>
										<label>Actividad Comercial:</label><p>{{$comercio->actComercial}} - {{ $comercio->categoria }}</p>
										<label>Propietario:</label><p>{{ $comercio->nombreRepresentante }}</p>
										<label>Email: </label><p>{{$comercio->email}}</p>
									</div>
									<div class="well">

											<img src="qrcodes/{{$comercio->qr}}">
											<p>Escanéame para ver en la web</p>



									</div>

								</div>

								<div class="col-md-6">
									<h2>Horario de Atención</h2>
									<div class="well">
										<table class="table">
											<thead>
												<tr>
												  <th>Día</th>
												  <th>Horario</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													@if($comercio->lunes == 1)
													<td><h2>Lunes: </h2></td>
													<td><h2>{{ $comercio->horario }}</h2></td>
													@else
													<td><h2 style="color:#FF0000;">Lunes:</h2></td>
													<td><h2 style="color:#FF0000;" >Cerrado</h2></td>
													@endif
												</tr>
												<tr>
													@if($comercio->martes == 1)
													<td><h2>Martes: </h2></td>
													<td><h2>{{ $comercio->horario }}</h2></td>
													@else
													<td><h2 style="color:#FF0000;">Martes:</h2></td>
													<td><h2 style="color:#FF0000;">Cerrado</h2></td>
													@endif
												</tr>
												<tr>
													@if($comercio->miercoles == 1)
													<td><h2>Miércoles: </h2></td>
													<td><h2>{{ $comercio->horario }}</h2></td>
													@else
													<td><h2 style="color:#FF0000;">Miércoles:</h2></td>
													<td><h2 style="color:#FF0000;">Cerrado</h2></td>
													@endif
												</tr>
												<tr>
													@if($comercio->jueves == 1)
													<td><h2>Jueves: </h2></td>
													<td><h2>{{ $comercio->horario }}</h2></td>
													@else
													<td><h2 style="color:#FF0000;">Jueves:</h2></td>
													<td><h2 style="color:#FF0000;">Cerrado</h2></td>
													@endif
												</tr>
												<tr>
													@if($comercio->viernes == 1)
													<td><h2>Viernes: </h2></td>
													<td><h2>{{ $comercio->horario }}</h2></td>
													@else
													<td><h2 style="color:#FF0000;">Viernes:</h2></td>
													<td><h2 style="color:#FF0000;">Cerrado</h2></td>
													@endif
												</tr>
												<tr>
													@if($comercio->sabado == 1)
													<td><h2>Sábado: </h2></td>
													<td><h2>{{ $comercio->horario }}</h2></td>
													@else
													<td><h2 style="color:#FF0000;">Sábado:</h2></td>
													<td><h2 style="color:#FF0000;">Cerrado</h2></td>
													@endif
												</tr>
												<tr>
													@if($comercio->domingo == 1)
													<td><h2>Domingo: </h2></td>
													<td><h2>{{ $comercio->horario }}</h2></td>
													@else
													<td><h2 style="color:#FF0000;">Domingo:</h2></td>
													<td><h2 style="color:#FF0000;">Cerrado</h2></td>
													@endif
												</tr>
											</tbody>
										</table>

									</div>
									<div>
									<h2>Redes Sociales e Internet</h2>
									<div class="clearfix"> </div>
									</div>
									<div >
										<a href="{{ $comercio->facebook }}" target="_Blank"><img src="images/facebook.png" style="width: 45px; height: 45px;"></a>
										<a href="{{ $comercio->twitter }}" target="_Blank"><img src="images/twitter.jpg" style="width: 45px; height: 45px;"></a>
										<a href="{{ $comercio->instagram }}" target="_Blank"><img src="images/instagram.png" style="width: 45px; height: 45px;"></a>
										<a href="{{ $comercio->url }}" target="_Blank"><img src="images/web.png" style="width: 45px; height: 45px;"></a>


									</div>

								</div>
							</div>
						</div>
						<div class="col-md-6 well">

										<div>
											<img src="images/logo-pdf.png" style="width: 45px; height: 50px;">
											<form action="{{ route('descargarPDF') }}">
												<input type="hidden" name="idPDF" value="{{ $comercio->id }}">
												<button type="submit" class="btn btn-default">Descargar PDF</button>
											</form>
										</div>

									</div>
						<div class="chute chute-center">
							<div class="row mb40">
								<div class="col-md-12">
									<div class="well">
										<h2>Estado del Contribuyente</h2>
										<table class="table">
											<thead>
												<tr>
													<th>RUT</th>
													<th>Cámara de Comercio</th>
													<th>Industria y Comercio</th>
													<th>Uso de Suelos</th>
													<th>Impuesto de Industria y Comercio</th>
													<th>Sayco y Acinpro</th>
													<th>Sanidad</th>
													<th>Manejo de Alimentos</th>
													<th>Bomberos</th>
												</tr>
											</thead>
											<tbody>
												<th>{{ $comercio->rut }}</th>
												<th>{{ $comercio->camaraComercio }}</th>
												<th>{{ $comercio->rtiyc }}</th>
												<th>{{ $comercio->usoSuelos }}</th>
												<th>{{ $comercio->diiyc }}</th>
												<th>{{ $comercio->saycoAcinpro }}</th>
												<th>{{ $comercio->sanidad }}</th>
												<th>{{ $comercio->manejoAlimentos }}</th>
												<th>{{ $comercio->bomberos }}</th>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					<div class="form-grids widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>¿Algo que contarnos?</h4>
								</div>
								<div class="form-body">
									<form action="{{ route('enviarMensaje') }}">
										<div class="form-group">
											<label for="exampleInputEmail1">Email</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="emailPQR" value="{{ old('emailPQR') }}">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Nombres</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombres" name="nombrePQR" value="{{ old('nombrePQR') }}">
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Mensaje</label>
											<div class="col-sm-8"><textarea name="mensajePQR" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
										</div>
										<input type="hidden" name="asuntoPQR" value="PQR {{ $comercio->nombre }}">
										<input type="hidden" name="leidoPQR" value="0">
										<input type="hidden" name="idPQR" value="{{$comercio->id}}">
										<button type="submit" class="btn btn-default">Enviar</button> </form>
								</div>
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

<script>
										$(function () {
										  var map = new GMaps({
										  el: "#map1",
										  lat: {{ $comercio->lat }},
										  lng: {{ $comercio->long }},
										  zoom: 15,
										  zoomControl : true,
										  zoomControlOpt: {
											style : "SMALL",
											position: "TOP_LEFT"
										  },
										  panControl : true,
										  streetViewControl : false,
										  mapTypeControl: false,
										  overviewMapControl: false
										});

										  GMaps.geolocate({
										        success: function(position){
										          lat = {{$comercio->lat}};
										          lng = {{$comercio->long}};
										          //Definimos la vista del mapa sobre las coordenadas obtenidas
										          map.setCenter(lat, lng);
										          //Añadimos un marcador
										          map.addMarker({ lat: lat, lng: lng});
										        },
										        error: function(error){
										          alert('Geolocation failed: '+error.message);
										        },
										        not_supported: function(){
										          alert("Your browser does not support geolocation");
										        }
										      });



										var styles = [
											{
											  stylers: [
												{ hue: "#00ffe6" },
												{ saturation: -20 }
											  ]
											}, {
												featureType: "road",
												elementType: "geometry",
												stylers: [
													{ lightness: 100 },
													{ visibility: "simplified" }
											  ]
											}, {
												featureType: "road",
												elementType: "labels",
												stylers: [
													{ visibility: "off" }
											  ]
											}
										];

										map.addStyle({
											styledMapName:"Styled Map",
											styles: styles,
											mapTypeId: "map_style"
										});

										map.setStyle("map_style");
									  });
									</script>

@endsection
