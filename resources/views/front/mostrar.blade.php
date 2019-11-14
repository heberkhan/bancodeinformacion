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

					</div>
					<div class="panel panel-widget">

						<div class="chute chute-center">

							<div class="row mb40">

                <div class="form-group">

                  <div class="col-md-6">
                    <br><br><br><br>

                      <h1 style="color: Red;">{{$com->nombre}}</h1>
                      <h3 style="color: #2ECCFA">{{$com->descripcion}}</h3>


                  </div>

                  <div class="col-md-6">
                    <img src="images/logo/{{ $com->logo }}" style="width:100%; height:100%;" alt="logo_comercio">
                  </div>
                </div>


							</div>
						</div>
            <div class="chute chute-center">
							<div class="row mb40">
                <h1>INFORMACIÓN DEL ESTABLECIMIENTO </h1>
                <div class="form-group">
                  <div class="col-md-6">

                    <div class="input-group input-icon right">
                      <label for="dirEstablecimiento">Dirección:</label>
                          <span class="input-group-addon" style="color: RED;">
                            <i class="fas fa-home"></i>
                          </span>

                          <input id="dirEstablecimiento" class="form-control1" type="text" value="{{$com->dirEstablecimiento}}" disabled style="font-size:20px;">
                        </div>
                  </div>

                  <div class="col-md-6">

                    <div class="input-group input-icon right">
                      <label for="telefono">Teléfono Fijo:</label>
                          <span class="input-group-addon" style="color: RED;">
                            <i class="fas fa-phone"></i>
                          </span>
                          @if($com->telefono != null)
                          <input id="telefono" class="form-control1" type="text" value="{{$com->telefono}}" disabled style="font-size:20px;">
                          @else
                          <input id="telefono" class="form-control1" type="text" value="NO POSEE" disabled style="font-size:20px;">
                          @endif
                        </div>
                  </div>
                </div>
								<div class="form-group">
                  <div class="col-md-6">
                    <label for="celular">Teléfono Móvil:</label>
                    <div class="input-group input-icon right">
                          <span class="input-group-addon" style="color: RED;">
                            <i class="fas fa-mobile-alt"></i>
                          </span>
                          @if($com->celular != null)
                          <input id="celular" class="form-control1" type="text" value="{{$com->celular}}" disabled style="font-size:20px;">
                          @else
                          <input id="celular" class="form-control1" type="text" value="NO POSEE" disabled style="font-size:20px;">
                          @endif
                        </div>
                  </div>
                  <div class="col-md-6">
                    <label for="actComercial">Actividad Comercial:</label>
                    <div class="input-group input-icon right">

                          <span class="input-group-addon" style="color: RED;">
                            <i class="far fa-list-alt"></i>
                          </span>
                          <input id="actComercial" class="form-control1" type="text" value="{{$com->actComercial}} - {{$com->categoria}}" disabled style="font-size:20px;">
                        </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6">
                    <label for="email">Email:</label>
                    <div class="input-group input-icon right">

                          <span class="input-group-addon" style="color:RED;">
                            <i class="fas fa-envelope-open-text"></i>
                          </span>
                          <input id="email" class="form-control1" type="text" value="{{$com->email}}" disabled style="font-size:20px;">
                    </div>
                  </div>
                  <div class="col-md-6">
                    @if($rep != null)
                    <label for="nombreRepresentante">Representante Legal:</label>
                    <div class="input-group input-icon right">

                          <span class="input-group-addon" style="color: RED;">
                            <i class="far fa-id-card"></i>
                          </span>
                          <input id="nombreRepresentante" class="form-control1" type="text" value="{{$rep->nombreRepresentante}}" disabled style="font-size:20px;">
                        </div>
                  </div>

                  @endif
                </div>


							</div>
              <div class="row mb40">
                @if($redes != null)
                  <h1>REDES SOCIALES E INTERNET</h1>
                  <div class="col-md-6">

                    <label for="facebook">Facebook:</label>
                    <div class="input-group input-icon right">
                        @if($redes->facebook != null)
                          <span class="input-group-addon" style="color: #0080FF;">

                              <a href="{{$redes->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>

                          </span>

                          <input id="facebook" class="form-control1" type="text" value="{{$redes->facebook}}" disabled style="font-size:20px;">
                          @else
                          <span class="input-group-addon" style="color: #0080FF;">

                            <i class="fab fa-facebook"></i>

                          </span>
                          <input id="facebook" class="form-control1" type="text" value="NO POSEE" disabled style="font-size:20px;">
                          @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="twitter">Twitter:</label>
                    <div class="input-group input-icon right">

                          <span class="input-group-addon" style="color: #0080FF;">

                              <a href="{{$redes->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>

                          </span>
                          @if($redes->twitter != null)
                          <input id="twitter" class="form-control1" type="text" value="{{$redes->twitter}}" disabled style="font-size:20px;">
                          @else
                          <input id="twitter" class="form-control1" type="text" value="NO POSEE" disabled style="font-size:20px;">
                          @endif
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label for="instagram">Instagram:</label>
                    <div class="input-group input-icon right">

                          <span class="input-group-addon" style="color: #0080FF;">

                              <a href="{{$redes->instagram}}" target="_blank"><i class="fab fa-instagram"></i></a>

                          </span>
                          @if($redes->instagram != null)
                          <input id="instagram" class="form-control1" type="text" value="{{$redes->instagram}}" disabled style="font-size:20px;">
                          @else
                          <input id="instagram" class="form-control1" type="text" value="NO POSEE" disabled style="font-size:20px;">
                          @endif
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="url">Twitter:</label>
                    <div class="input-group input-icon right">

                          <span class="input-group-addon" style="color: #0080FF;">

                              <a href="{{$redes->url}}" target="_blank"><i class="fas fa-globe-americas"></i></a>

                          </span>
                          @if($redes->url != null)
                          <input id="url" class="form-control1" type="text" value="{{$redes->url}}" disabled style="font-size:20px;">
                          @else
                          <input id="url" class="form-control1" type="text" value="NO POSEE" disabled style="font-size:20px;">
                          @endif
                    </div>
                  </div>



            <h1>¿COMO ENCONTRARNOS?</h1><br>
            <div class="col-md-12">

                <div class="span11">
                  <div id="map1"> </div>
                  </div>

                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d5015.633806604226!2d-73.68871715712513!3d3.82928311641935!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1552948525975" width="100%" height="300" frameborder="0" style="border:1; height: 300px;" allowfullscreen></iframe> -->

            </div>
              @endif

            </div>

							<div class="row mb40">
                <div class="form-group">
                  <div class="col-md-12">
                      <br><br>
                      <h1>Estado del Contribuyente</h1>
                      <br><br>
                    @if($com->impuesto_id1 != '0')
                      <div class="col-md-4">
                        <div class="form-group">
                          <h3>{{$com->impuesto_id1}}</h3>
                          <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                        </div>
                      </div>
                    @endif
                    @if($com->impuesto_id2 != '0')
                      <div class="col-md-4">
                        <div class="form-group">
                          <h3>{{$com->impuesto_id2}}</h3>
                          <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                        </div>
                      </div>
                    @endif
                    @if($com->impuesto_id3 != '0')
                      <div class="col-md-4">
                        <div class="form-group">
                          <h3>{{$com->impuesto_id3}}</h3>

                          <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                        </div>
                      </div>
                    @endif
                  </div>
                  <div class="col-md-12">
                    @if($com->impuesto_id4 != '0')
                      <div class="col-md-4">
                        <div class="form-group">
                          <h3>{{$com->impuesto_id4}}</h3>
                          <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                        </div>
                      </div>
                    @endif
                    @if($com->impuesto_id5 != '0')
                      <div class="col-md-4">
                        <div class="form-group">
                          <h3>{{$com->impuesto_id5}}</h3>
                          <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                        </div>
                      </div>
                    @endif
                    @if($com->impuesto_id6 != '0')
                      <div class="col-md-4">
                        <div class="form-group">
                          <h3>{{$com->impuesto_id6}}</h3>
                          <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                        </div>
                      </div>
                    @endif
                  </div>
                  <div class="col-md-12">
                    @if($com->impuesto_id7 != '0')
                      <div class="col-md-4">
                        <div class="form-group">
                          <h3>{{$com->impuesto_id7}}</h3>

                          <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">

                        </div>

                      </div>
                    @endif
                    @if($com->impuesto_id8 != '0')
                      <div class="col-md-4">
                        <div class="form-group">
                          <h3>{{$com->impuesto_id8}}</h3>
                          <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                        </div>
                      </div>
                    @endif

                </div>
              </div>

              <!-- REQUISITOS  -->

              <div class="form-group">
                <div class="col-md-12">
                    <br><br>
                    <h1>Requisitos Cumplidos</h1>
                    <br><br>
                  @if($com->requisito_id1 != '0')
                    <div class="col-md-4">
                      <div class="form-group">
                        <h3>{{$com->requisito_id1}}</h3>
                        <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                      </div>
                    </div>
                  @endif
                  @if($com->requisito_id2 != '0')
                    <div class="col-md-4">
                      <div class="form-group">
                        <h3>{{$com->requisito_id2}}</h3>
                        <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                      </div>
                    </div>
                  @endif
                  @if($com->requisito_id3 != '0')
                    <div class="col-md-4">
                      <div class="form-group">
                        <h3>{{$com->requisito_id3}}</h3>

                        <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                      </div>
                    </div>
                    <div class="clearfix"> </div>
                  @endif
                  @if($com->requisito_id4 != '0')
                    <div class="col-md-4">
                      <div class="form-group">
                        <h3>{{$com->requisito_id4}}</h3>
                        <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                      </div>
                    </div>
                  @endif
                  @if($com->requisito_id5 != '0')
                    <div class="col-md-4">
                      <div class="form-group">
                        <h3>{{$com->requisito_id5}}</h3>
                        <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                      </div>
                    </div>
                  @endif
                  @if($com->requisito_id6 != '0')
                    <div class="col-md-4">
                      <div class="form-group">
                        <h3>{{$com->requisito_id6}}</h3>
                        <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                      </div>
                    </div>
                    <div class="clearfix"> </div>
                  @endif
                  @if($com->requisito_id7 != '0')
                    <div class="col-md-4">
                      <div class="form-group">
                        <h3>{{$com->requisito_id7}}</h3>

                        <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">

                      </div>

                    </div>
                  @endif
                  @if($com->requisito_id8 != '0')
                    <div class="col-md-4">
                      <div class="form-group">
                        <h3>{{$com->requisito_id8}}</h3>
                        <img src="images/medalla.png" alt="positivo" style="width:100%; height:auto;" align="center" class="img-fluid">
                      </div>
                    </div>
                  @endif
              </div>
            </div>

              <div class="col-md-6">

                      <div>
                        <img src="images/logo-pdf.png" style="width: 45px; height: 50px;" alt="logo_pdf">
                        <form action="{{ route('descargarPDF') }}">
                          <input type="hidden" name="idPDF" value="{{ $com->id }}">
                          <button type="submit" class="btn btn-default">Descargar PDF</button>
                        </form>
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
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="emailPQR" value="{{ old('emailPQR') }}">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Nombres</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombres" name="nombrePQR" value="{{ old('nombrePQR') }}">
										</div>
										<div class="form-group">
											<label for="txtarea1" class="col-sm-2 control-label">Mensaje</label><br>
											<textarea name="mensajePQR" id="txtarea1" cols="650" rows="6" class="form-control1"></textarea>
										</div>
										<input type="hidden" name="asuntoPQR" value="PQR {{ $com->nombre }}">
										<input type="hidden" name="leidoPQR" value="0">
										<input type="hidden" name="idPQR" value="{{$com->id}}">
										<button type="submit" class="btn btn-default">Enviar</button> </form>
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
									<img src="images/identidad/castilla.png" alt="logo" />
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
@if($redes != null)
<script>

										$(function () {
										  var map = new GMaps({
										  el: "#map1",
										  lat: {{ $redes->lat }},
										  lng: {{ $redes->long }},
										  zoom: 15,
										  zoomControl : true,
										  zoomControlOpt: {
											style : "BIG",
											position: "TOP_LEFT"
										  },
										  panControl : true,
										  streetViewControl : false,
										  mapTypeControl: false,
										  overviewMapControl: false
										});

										  GMaps.geolocate({
										        success: function(position){
										          lat = {{$redes->lat}};
										          lng = {{$redes->long}};
										          //Definimos la vista del mapa sobre las coordenadas obtenidas
										          map.setCenter(lat, lng);
										          //Añadimos un marcador
										          map.addMarker({ lat: lat, lng: lng});
										        },
										        error: function(error){
										          alert('Geolocación fallida: '+error.message);
										        },
										        not_supported: function(){
										          alert("Tu navegador no soporta la geolocalización");
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


    <script src="https://maps.googleapis.com/maps/api/js?libraries=directions&key=AIzaSyCPsXjjweJyVBZHNSN1b6uW594vBYMy8EQ"></script>
    <script src="js/prettymaps.js"></script>
                  @endif

@endsection
