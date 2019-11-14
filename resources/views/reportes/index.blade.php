@extends('layout.temaAdmin')
@section('content')

<!--four-grids here-->
<div class="four-grids">
      <div class="col-md-3 four-grid">
        <div class="four-agileits">
          <div class="icon">
            <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
          </div>
          <div class="four-text">
            <h3>Comercios Proyectados</h3>
            <h4>500</h4>


          </div>

        </div>
      </div>
      <div class="col-md-3 four-grid">
        <div class="four-agileinfo">
          <div class="icon">
            <i class="glyphicon glyphicon-edit" aria-hidden="true"></i>
          </div>
          <div class="four-text">
            <h3>Comercios Registrados</h3>
            <h4>{{$comercios}} </h4>

          </div>

        </div>
      </div>
      <div class="col-md-3 four-grid">

      </div>
      <div class="col-md-3 four-grid">
        
      </div>
      <div class="clearfix"></div>
    </div>
    <!--//four-grids here-->


                            <div class="col-sm-4 wthree-crd">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget widget-report-table">
                                            <header class="widget-header m-b-15">
                                            </header>

                                            <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                                <div class="col-md-6 w3layouts-aug">
                                                    <h2>Establecimientos Comerciales</h2>
                                                    <p>Al día en impuestos</p>
                                                </div>

                                            </div>

                                            <div class="widget-body p-15">
                                              <form class="" action="{{route('reportes.alDia')}}" method="post" target="_blank">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                  <label for="">Impuesto</label>
                                                  <select class="form-control1" name="impuesto" required>
                                                    <option value="" selected>SELECCIONE UNA OPCIÓN</option>
                                                    @foreach($impuestos as $impuesto)
                                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Sector</label>
                                                  <select class="form-control1" name="barrio" required>
                                                    <option value="" selected>SELECCIONE UNA OPCIÓN</option>
                                                    @foreach($barrios as $barrio)
                                                    <option value="{{$barrio->id}}">{{$barrio->name}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Ver Reporte</button>

                                              </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 wthree-crd">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget widget-report-table">
                                            <header class="widget-header m-b-15">
                                            </header>

                                            <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                                <div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
                                                    <h2>Establecimientos Comerciales</h2>
                                                    <p>Total por categorías</p>
                                                </div>

                                            </div>

                                            <div class="widget-body p-15">
                                              <form class="" action="{{route('reportes.categoria')}}" method="post" target="_blank">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                  <label for="">Categoría</label>
                                                  <select name="categoria" for="categoria" required class="form-control1">
                                                      <option selected="" value="">SELECCIONE UNA OPCIÓN </option>
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

                                                <button type="submit" class="btn btn-primary">Ver Reporte</button>
                                              </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4 wthree-crd">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget widget-report-table">
                                            <header class="widget-header m-b-15">
                                            </header>

                                            <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                                <div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
                                                    <h2>Establecimientos Comerciales</h2>
                                                    <p>Reportes de mensajes</p>
                                                </div>

                                            </div>

                                            <div class="widget-body p-15">
                                              <form class="" action="{{route('reportes.porFechas')}}" method="post" target="_blank">
                                                {!! csrf_field() !!}
                                                <label for="">Sector</label>
                                                <select class="form-control1" name="barrio" required>
                                                  <option value="" selected>SELECCIONE UNA OPCIÓN</option>
                                                  @foreach($barrios as $barrio)
                                                  <option value="{{$barrio->id}}">{{$barrio->name}}</option>
                                                  @endforeach
                                                </select>
                                                <div class="form-group">
                                                  <label for="">Fecha inicio</label>
                                                  <input type="date" name="fechaInicio" value="" class="form-control1">
                                                </div>

                                                <div class="form-group">
                                                  <label for="">Fecha fin</label>
                                                  <input type="date" name="fechaFin" value="" class="form-control1">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Ver Reporte</button>
                                                <a href="{{route('reportes.consolidado')}}" class="btn btn-danger">Ver Total</a>
                                              </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 wthree-crd">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget widget-report-table">
                                            <header class="widget-header m-b-15">
                                            </header>

                                            <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                                <div class="col-md-6 col-sm-6 col-xs-6 w3layouts-aug">
                                                    <h2>Establecimientos Comerciales</h2>
                                                    <p>Consolidado para datos abiertos</p>
                                                </div>

                                            </div>

                                            <div class="widget-body p-15">
                                              <a href="{{route('reportes.datosAbiertos')}}" class="btn btn-primary" target="_blank">Ver Reporte</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    						<div class="clearfix"></div>



@endsection
