@extends('layout.temaAdmin')
@section('content')

<!--four-grids here-->
    <div class="four-grids">
        <div class="col-md-3 four-grid">

        </div>
        <div class="col-md-3 four-grid">

        </div>
        <div class="col-md-3 four-grid">

        </div>
        <div class="col-md-3 four-grid">

        </div>
        <div class="clearfix"></div>
    </div>
    <!--//four-grids here-->

<div class="agile-grids">
				<!-- tables -->

				<div class="agile-tables">
					<div class="w3l-table-info">
                      <div class="panel-heading">
                        <h2>Reportes</h2>
                        <div class="form-group">


                            <!-- BUSCADOR -->
                            <div class="col-md-12 form-group1 form-last">

	                                <form method="GET" action="{{ route('reportes.buscar') }}">
	                                    <div class="vali-form">
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">Tipo de Persona</label>
			                                    <select for="tipoPersona" name="tipoPersona" >
			                                        <option selected="" > </option>
			                                        <option for="tipoPersona" value="Natural">Natural</option>
			                                        <option for="tipoPersona" value="Jurídica">Jurídica</option>
			                                        <option for="tipoPersona" value="Consorcio o Unión Temporal">Consorcio o Unión Temporal</option>
			                                    </select>
                                			</div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">Barrio</label>
			                                    <select for="barrio" name="barrio" >
			                                        <option selected="" > </option>
			                                        @foreach($barrios as $barrio)
			                                        <option for="barrio" value="{{ $barrio->name }}">{{ $barrio->name }}, {{ $barrio->upz }}</option>
			                                        @endforeach
			                                    </select>
			                                </div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">Actividad Comercial</label>
			                                    <select for="actComercial" name="actComercial" >
			                                        <option selected="" > </option>
			                                        <option for="actComercial" value="Comercial">Comercial</option>
			                                        <option for="actComercial" value="Financiero">Financiero</option>
			                                        <option for="actComercial" value="Industrial">Industrial</option>
			                                        <option for="actComercial" value="Servicios">Servicios</option>
			                                        <option for="actComercial" value="Otros">Otros</option>
			                                    </select>
                                			</div>
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">Categoría</label>
			                                    <select name="categoria" for="categoria" >
			                                        <option selected="" value=""> </option>
			                                        <optgroup label="Comercial">
			                                            <option for="categoria" value="Ferreterías" >Ferreterías </option>
			                                            <option for="categoria" value="Droguerías" >Droguerías </option>
			                                            <option for="categoria" value="Casas de Cambio" >Casas de Cambio </option>
			                                            <option for="categoria" value="Restaurantes" >Restaurantes </option>
			                                            <option for="categoria" value="Agencias de Viaje" >Agencias de Viaje </option>
			                                            <option for="categoria" value="Moteles" >Moteles </option>
			                                            <option for="categoria" value="Floristerías" >Floristerías </option>
			                                            <option for="categoria" value="Inmobiliarias" >Inmobiliarias </option>
			                                            <option for="categoria" value="Disfraces" >Disfraces </option>
			                                            <option for="categoria" value="Librerías" >Librerías </option>
			                                            <option for="categoria" value="Teléfonos" >Teléfonos </option>
			                                            <option for="categoria" value="Papelerías" >Papelerías </option>
			                                            <option for="categoria" value="Cades, Supercades y Rapicades" >Cades, Supercades y Rapicades </option>
			                                            <option for="categoria" value="Peluquerías" >Peluquerías </option>
			                                            <option for="categoria" value="Tiendas Naturistas" >Tiendas Naturistas </option>
			                                            <option for="categoria" value="Restaurante a Domicilio" >Restaurante a Domicilio </option>
			                                            <option for="categoria" value="Centro de belleza y estética" >Centro de belleza y estética </option>
			                                            <option for="categoria" value="Supermercados" >Supermercados </option>
			                                            <option for="categoria" value="Ópticas" >Ópticas </option>
			                                            <option for="categoria" value="Vidrios" >Vidrios </option>
			                                            <option for="categoria" value="Productos Químicos" >Productos Químicos </option>
			                                            <option for="categoria" value="Repuestos para motocicletas" >Repuestos para motocicletas </option>
			                                            <option for="categoria" value="Fundaciones" >Fundaciones </option>
			                                            <option for="categoria" value="Materiales eléctricos" >Materiales eléctricos </option>
			                                            <option for="categoria" value="Panaderías" >Panaderías </option>
			                                            <option for="categoria" value="Bicicletas" >Bicicletas </option>
			                                            <option for="categoria" value="Agencias de publicidad" >Agencias de publicidad </option>
			                                            <option for="categoria" value="Instrumentos musicales" >Instrumentos musicales </option>
			                                            <option for="categoria" value="Pastelería" >Pastelería </option>
			                                            <option for="categoria" value="Maderas" >Maderas </option>
			                                            <option for="categoria" value="Constructoras" >Constructoras </option>
			                                            <option for="categoria" value="Llantas" >Llantas </option>
			                                            <option for="categoria" value="Dotaciones para empresas" >Dotaciones para empresas </option>
			                                            <option for="categoria" value="Comidas rápidas" >Comidas rápidas </option>
			                                            <option for="categoria" value="Viveros" >Viveros </option>
			                                            <option for="categoria" value="Asaderos" >Asaderos </option>
			                                            <option for="categoria" value="Artículos ortopédicos" >Artículos ortopédicos </option>
			                                            <option for="categoria" value="Artículos para adultos" >Artículos para adultos </option>
			                                            <option for="categoria" value="Reciclajes" >Reciclajes </option>
			                                            <option for="categoria" value="Estampados" >Estampados </option>
			                                            <option for="categoria" value="Radiodifusoras" >Radiodifusoras </option>
			                                            <option for="categoria" value="Farmacias" >Farmacias </option>
			                                        </optgroup>
			                                        <optgroup label="Industrial">
			                                            <option for="categoria" value="Plásticos" >Plásticos </option>
			                                            <option for="categoria" value="Telas" >Telas </option>
			                                            <option for="categoria" value="Repuestos automotrices" >Repuestos automotrices </option>
			                                            <option for="categoria" value="Confecciones" >Confecciones </option>
			                                            <option for="categoria" value="Uniformes" >Uniformes </option>
			                                            <option for="categoria" value="Aire acondicionado" >Aire acondicionado </option>
			                                        </optgroup>
			                                        <optgroup label="Servicios">
			                                            <option for="categoria" value="Hoteles" >Hoteles </option>
			                                            <option for="categoria" value="Transporte terrestre de pasajeros" >Transporte terrestre de pasajeros </option>
			                                            <option for="categoria" value="Fondo de pensiones y cesantías" >Fondo de pensiones y cesantías </option>
			                                            <option for="categoria" value="Clínicas veterinarias" >Clínicas veterinarias </option>
			                                            <option for="categoria" value="Taxis" >Taxis </option>
			                                            <option for="categoria" value="Agencias de empleo" >Agencias de empleo </option>
			                                            <option for="categoria" value="Laboratorio Clínico" >Laboratorio Clínico </option>
			                                            <option for="categoria" value="Notarías" >Notarías </option>
			                                            <option for="categoria" value="Salones para recepciones" >Salones para recepciones </option>
			                                            <option for="categoria" value="Clínicas" >Clínicas </option>
			                                            <option for="categoria" value="Escuelas de fútbol" >Escuelas de fútbol </option>
			                                            <option for="categoria" value="Iglesias y parroquias católicas" >Iglesias y parroquias católicas </option>
			                                            <option for="categoria" value="Iglesias" >Iglesias </option>
			                                            <option for="categoria" value="Centros de rehabilitación" >Centros de rehabilitación </option>
			                                            <option for="categoria" value="Empleos temporales" >Empleos temporales </option>
			                                            <option for="categoria" value="Ecografías" >Ecografías </option>
			                                            <option for="categoria" value="Abogados" >Abogados </option>
			                                            <option for="categoria" value="Terminales de transporte terrestre" >Terminales de transporte terrestre </option>
			                                            <option for="categoria" value="Cooperativas" >Cooperativas </option>
			                                            <option for="categoria" value="Salud ocupacional" >Salud ocupacional </option>
			                                            <option for="categoria" value="Laboratorios farmacéuticos" >Laboratorios farmacéuticos </option>
			                                            <option for="categoria" value="Mariachis" >Mariachis </option>
			                                            <option for="categoria" value="Clínicas odontológicas" >Clínicas odontológicas </option>
			                                            <option for="categoria" value="Alquiler de lavadoras" >Alquiler de lavadoras </option>
			                                            <option for="categoria" value="Alquiler de ropa" >Alquiler de ropa </option>
			                                            <option for="categoria" value="Transporte puerta a puerta" >Transporte puerta a puerta </option>
			                                            <option for="categoria" value="Centros médicos" >Centros médicos </option>
			                                            <option for="categoria" value="Spa" >Spa </option>
			                                            <option for="categoria" value="Hospitales" >Hospitales </option>
			                                            <option for="categoria" value="Trasteos" >Trasteos </option>
			                                            <option for="categoria" value="Estaciones" >Estaciones </option>
			                                            <option for="categoria" value="Transporte terrestre de carga" >Transporte terrestre de carga </option>
			                                            <option for="categoria" value="Transporte especial de pasajeros" >Transporte especial de pasajeros </option>
			                                            <option for="categoria" value="Hogares geriátricos" >Hogares geriátricos </option>
			                                            <option for="categoria" value="Comisarías de familia" >Comisarías de familia </option>
			                                            <option for="categoria" value="Cajas de compensación familiar" >Cajas de compensación familiar </option>
			                                            <option for="categoria" value="Iglesias cristianas" >Iglesias cristianas </option>
			                                            <option for="categoria" value="Guarderías infantiles" >Guarderías infantiles </option>
			                                            <option for="categoria" value="Servicios de formación" >Servicios de formación </option>
			                                        </optgroup>
			                                        <optgroup label="Financiero">
			                                            <option for="categoria" value="Bancos" >Bancos </option>
			                                        </optgroup>
			                                        <optgroup label="Otros">
			                                            <option for="categoria" value="Otros" >Otros </option>
			                                        </optgroup>
			                                    </select>
                                			</div>
                                			<div class="clearfix"></div>
                            			</div>
                            			<div class="vali-form">
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Via principal?</label>
			                                    <select for="viaPrincipal" name="viaPrincipal" >
			                                        <option selected="" > </option>
			                                        <option for="viaPrincipal" value="Si">Si</option>
			                                        <option for="viaPrincipal" value="No">No</option>

			                                    </select>
                                			</div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Avisos o letreros?</label>
			                                    <select for="duenoTrabaja" name="duenoTrabaja" >
			                                        <option selected="" > </option>
			                                        <option for="duenoTrabaja" value="Si">Si</option>
			                                        <option for="duenoTrabaja" value="No">No</option>

			                                    </select>
			                                </div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">Tipo de Local</label>
			                                    <select for="tipoLocal" name="tipoLocal" >
			                                        <option selected="" > </option>
			                                        <option for="tipoLocal" value="Local en Arriendo">Local en Arriendo</option>
			                                        <option for="tipoLocal" value="Local Propio">Local Propio</option>
			                                        <option for="tipoLocal" value="Móvil">Móvil</option>
			                                    </select>
                                			</div>
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">Consumo de Energía</label>
				                                    <select name="consumoEnergia" for="consumoEnergia" >
				                                        <option selected="" value=""> </option>
				                                        <option for="consumoEnergia" value="150kw" >Hasta 150 KW </option>
				                                        <option for="consumoEnergia" value="151-350kw" >Entre 151 y 350 KW </option>
				                                        <option for="consumoEnergia" value="351+" >Más de 350 KW </option>
				                                    </select>
                                			</div>
                                			<div class="clearfix"></div>
                            			</div>
                            			<div class="vali-form">
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Se encuentra inscrito en el registro único tributario RUT?</label>
			                                    <select name="rut" for="rut" >
			                                        <option selected="" value=""> </option>
			                                        <option for="rut" value="Si" >Si </option>
			                                        <option for="rut" value="No" >No </option>
			                                    </select>
                                			</div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Se Encuentra Inscrito En El Registro Mercantil De Cámara De Comercio?</label>
			                                    <select name="camaraComercio" for="camaraComercio" >
			                                        <option selected="" value=""> </option>
			                                        <option for="camaraComercio" value="Si" >Si </option>
			                                        <option for="camaraComercio" value="No" >No </option>
			                                    </select>
			                                </div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Se encuentra inscrito en el Registro Tributario de Industria y Comercio?</label>
			                                    <select name="rtiyc" for="rtiyc" >
			                                        <option selected="" value=""> </option>
			                                        <option for="rtiyc" value="Si" >Si </option>
			                                        <option for="rtiyc" value="No" >No </option>
			                                    </select>
                                			</div>
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Certificado de Uso de Suelos?</label>
			                                    <select name="usoSuelos" for="usoSuelos" >
			                                        <option selected="" value=""> </option>
			                                        <option for="usoSuelos" value="Si" >Si </option>
			                                        <option for="usoSuelos" value="No" >No </option>
			                                    </select>
                                			</div>
                                			<div class="clearfix"></div>
                            			</div>
                            			<div class="vali-form">
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">Declaración Impuesto Industria y Comercio y complementarios</label>
			                                    <select name="diiyc" for="diiyc" >
			                                        <option selected="" value=""> </option>
			                                        <option for="diiyc" value="Si" >Si </option>
			                                        <option for="diiyc" value="No" >No </option>
			                                    </select>
                                			</div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Se Encuentra Inscrito En El Registro De Sayco Y Acinpro?</label>
			                                    <select name="saycoAcinpro" for="saycoAcinpro">
			                                        <option selected="" value=""> </option>
			                                        <option for="saycoAcinpro" value="Si" >Si </option>
			                                        <option for="saycoAcinpro" value="No" >No </option>
			                                    </select>
			                                </div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Cuenta Con Revisión De Sanidad Vigente?</label>
			                                    <select name="sanidad" for="sanidad">
			                                        <option selected="" value=""> </option>
			                                        <option for="sanidad" value="Si" >Si </option>
			                                        <option for="sanidad" value="No" >No </option>
			                                    </select>
                                			</div>
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Cuenta Con Certificación De Manejo De Alimentos Vigente?</label>
			                                    <select name="manejoAlimentos" for="manejoAlimentos">
			                                        <option selected="" value=""> </option>
			                                        <option for="manejoAlimentos" value="Si" >Si </option>
			                                        <option for="manejoAlimentos" value="No" >No </option>
			                                    </select>
                                			</div>
                                			<div class="clearfix"></div>
                            			</div>

                            			<div class="vali-form">
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Cuenta Con Certificación De Seguridad De Bomberos?</label>
			                                    <select name="bomberos" for="bomberos" >
			                                        <option selected="" value=""> </option>
			                                        <option for="bomberos" value="Si" >Si </option>
			                                        <option for="bomberos" value="No" >No </option>
			                                    </select>
                                			</div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Lleva Control Mediante Libro De Diario?</label>
			                                    <select name="libroDiario" for="libroDiario" >
			                                        <option selected="" value=""> </option>
			                                        <option for="libroDiario" value="Si" >Si </option>
			                                        <option for="libroDiario" value="No" >No </option>
			                                    </select>
			                                </div>
			                                <div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Contribuye Con El Impuesto De Industria Y Comercio Municipal?</label>
			                                    <select name="ciyc" for="ciyc" >
			                                        <option selected="" value=""> </option>
			                                        <option for="ciyc" value="Si" >Si </option>
			                                        <option for="ciyc" value="No" >No </option>
			                                    </select>
                                			</div>
                                			<div class="col-md-3 form-group2">
			                                    <label class="control-label">¿Conoce que es la economía digital?</label>
			                                    <select name="economiaDigital" for="economiaDigital">
			                                        <option selected="" value=""> </option>
			                                        <option for="economiaDigital" value="Si" >Si </option>
			                                        <option for="economiaDigital" value="No" >No </option>
			                                    </select>
                                			</div>
                                			<div class="clearfix"></div>
                            			</div>
	                                    <div class="col-md-12 form-group">
			                                <button type="submit" class="btn btn-primary">Filtrar</button>
			                                <button type="reset" class="btn btn-default">Cancelar</button>
			                            </div>
	                                </form>
	                           <div class="clearfix"></div>

                        	</div>

                            <!-- FIN BUSCADOR -->
                      </div>
          <!-- TABLA DE RESULTADOS             -->
					 <table id="table">
						<thead>
						  <tr>
                            <th>id</th>
							<th>Nombre</th>
							<th>Dirección</th>
							<th>Teléfono</th>
							<th>Representante Legal</th>


						  </tr>
						</thead>
						<tbody>
						  @foreach($comercios as $comercio)
						  <tr>
						  	<td>{{$comercio->id}}</td>
							<td>{{$comercio->nombre}}</td>
							<td>{{$comercio->dirEstablecimiento}}</td>
							<td>{{ $comercio->telefono }}</td>
							<td>{{ $comercio->nombreRepresentante }}</td>


						  </tr>
						 @endforeach
						</tbody>
					  </table>
					</div>




				</div>
				<!-- //tables -->
			</div>

      <!-- BOTÓN DE DESCARGA -->

      <!-- <div class="col-md-12 form-group">
        <form method="get" action="{{route('reportes.descarga')}}">
            <input value="{{$comercios}}" type="hidden" name="comercios">
            <button type="submit" class="btn btn-primary">Descargar</button>
        </form>
      </div> -->
@endsection
