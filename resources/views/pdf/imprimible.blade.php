<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
     

        <title>Imprimible</title>

    </head>
    <body>
        <div class="grids">
				<!--grids-->
				<div class="row">
									
								<div class="col-md-3">
									<div >
										<h3>{{ $comercio->nombre }}</h3>
										<h4>{{ $comercio->descripcion }}</h4>
										<p><strong>Teléfonos: </strong>{{$comercio->telefono}} - {{ $comercio->celular }}</p>
										<p><strong>Actividad Comercial: </strong>{{$comercio->actComercial}} - {{ $comercio->categoria }}</p>
										<p><strong>Propietario: </strong>{{ $comercio->nombreRepresentante }}</p>
										<p><strong>Email: </strong>{{ $comercio->email }}</p>
										<p>
											<strong>Horario:</strong>
										

											@if($comercio->lunes==1)
											Lunes, 
											@endif
											@if($comercio->martes==1)
											Martes, 
											@endif
											@if($comercio->miercoles==1)
											Miércoles, 
											@endif
											@if($comercio->jueves==1)
											Jueves, 
											@endif
											@if($comercio->viernes==1)
											Viernes, 
											@endif
											@if($comercio->sabado==1)
											Sábado, 
											@endif
											@if($comercio->domingo==1)
											Domingo.
											@endif
											{{$comercio->horario}}
										</p>
										<h4>Estado del Contribuyente: </h4>
										<label>Al día</label>
										<p>
											@if($comercio->rut=='Si')
												RUT, 		
											@endif
											@if($comercio->camaraComercio=='Si')
												Cámara de Comercio, 		
											@endif
											@if($comercio->rtiyc=='Si')
												Registro Industria y Comercio, 		
											@endif
											@if($comercio->usoSuelos=='Si')
												Uso del suelo, 		
											@endif
											@if($comercio->diiyc=='Si')
												Declaración de Industria y Comercio, 		
											@endif
											@if($comercio->saycoAcinpro=='Si')
												Sayco y Acinpro, 		
											@endif
											@if($comercio->sanidad=='Si')
												Sanidad, 		
											@endif
											@if($comercio->manejoAlimentos=='Si')
												Manipulación de Alimentos, 		
											@endif
											@if($comercio->bomberos=='Si')
												Bomberos, 		
											@endif
										</p>
										<label>Pendiente: </label>
										<p>
											@if($comercio->rut=='No')
												RUT, 		
											@endif
											@if($comercio->camaraComercio=='No')
												Cámara de Comercio, 		
											@endif
											@if($comercio->rtiyc=='No')
												Registro Industria y Comercio, 		
											@endif
											@if($comercio->usoSuelos=='No')
												Uso del suelo, 		
											@endif
											@if($comercio->diiyc=='No')
												Declaración de Industria y Comercio, 		
											@endif
											@if($comercio->saycoAcinpro=='No')
												Sayco y Acinpro, 		
											@endif
											@if($comercio->sanidad=='No')
												Sanidad, 		
											@endif
											@if($comercio->manejoAlimentos=='No')
												Manipulación de Alimentos, 		
											@endif
											@if($comercio->bomberos=='No')
												Bomberos, 		
											@endif
										</p>
										<label>No Aplica:</label>
										<p>
											@if($comercio->rut=='NA')
												RUT, 		
											@endif
											@if($comercio->camaraComercio=='NA')
												Cámara de Comercio, 		
											@endif
											@if($comercio->rtiyc=='NA')
												Registro Industria y Comercio, 		
											@endif
											@if($comercio->usoSuelos=='NA')
												Uso del suelo, 		
											@endif
											@if($comercio->diiyc=='NA')
												Declaración de Industria y Comercio, 		
											@endif
											@if($comercio->saycoAcinpro=='NA')
												Sayco y Acinpro, 		
											@endif
											@if($comercio->sanidad=='NA')
												Sanidad, 		
											@endif
											@if($comercio->manejoAlimentos=='NA')
												Manipulación de Alimentos, 		
											@endif
											@if($comercio->bomberos=='NA')
												Bomberos, 		
											@endif
										</p>
										<h4>Redes Sociales: </h4>
										<p>
											@if($comercio->facebook!=null)
											<img src="images/facebook.png" style="width: 15px; height: 15px;">
											{{ $comercio->facebook }} 
											@endif
										</p>
										<p>	
											@if($comercio->twitter!=null)
											<img src="images/twitter.jpg" style="width: 15px; height: 15px;">
											{{ $comercio->twitter }}
											@endif
										</p>

										<p>
											@if($comercio->instagram!=null)
											<img src="images/instagram.png" style="width: 15px; height: 15px;">
											{{ $comercio->instagram }}
											@endif
										</p>
										<p>	
											@if($comercio->url!=null)
											<img src="images/web.png" style="width: 15px; height: 15px;">
											{{ $comercio->url }}
											@endif
										</p>
										
											
											
											
										
									</div>
								</div>	
									
									
								
				
					<div class="col-md-3">
						<img src="qrcodes/{{$comercio->qr}}">
						<p>Escanéame para ver en la web</p>
					</div>
				</div>

								
								
			
					
					
</div>
                	
                
    </body>
</html>

		