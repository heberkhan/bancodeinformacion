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
    <!--agileinfo-grap-->
    <div class="agileinfo-grap">
        <div class="agileits-box">
            <header class="agileits-box-header clearfix">
                <h3>ACTUALIZAR DATOS DEL LOCAL</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('datos.update', $datosLocal->id) }}" enctype="multipart/form-data" method="get" name="form1" id="form1">
                            {!! csrf_field() !!}
                            <label>DATOS DEL LOCAL</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Se encuentra sobre una vía principal o de alto tránsito?</label>
                                    <select name="viaPrincipal" for="viaPrincipal">
                                        <option selected="" value="{{$datosLocal->viaPrincipal}}">{{$datosLocal->viaPrincipal}}</option>
                                        <option for="viaPrincipal" value="Si" >Si </option>
                                        <option for="viaPrincipal" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿El dueño trabaja en el establecimiento?</label>
                                    <select name="duenoTrabaja" for="duenoTrabaja">
                                        <option selected="" value="{{$datosLocal->duenoTrabaja}}">{{$datosLocal->duenoTrabaja}} </option>
                                        <option for="duenoTrabaja" value="Si" >Si </option>
                                        <option for="duenoTrabaja" value="No" >No </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                  <label for="checkbox" class="control-label">Días de atención al público</label>
                                  <input type="text" placeholder="Días Laborales" name="diasLaborales" value=" {{$datosLocal->diasLaborales}} " required="">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                  <label class="control-label">Horario de atención al público</label>
                                  <input type="text" placeholder="Horario de atención al público" name="horario" value=" {{$datosLocal->horario}} " required="">
                              </div>

                            </div>
                            <div class="vali-form">

                                <div class="col-md-6 form-group2 ">
                                    <label class="control-label">Tipo de local</label>
                                    <select name="tipoLocal" for="tipoLocal">
                                        <option selected="" value="{{$datosLocal->tipoLocal}}">{{$datosLocal->tipoLocal}} </option>
                                        <option for="tipoLocal" value="Local en Arriendo" >Local en Arriendo </option>
                                        <option for="tipoLocal" value="Local Propio" >Local Propio </option>
                                        <option for="tipoLocal" value="Móvil" >Móvil </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Tiene instalados avisos y tableros?</label>
                                    <select name="avisos" for="avisos" >
                                        <option selected="" value="{{$datosLocal->avisos}}"> {{$datosLocal->avisos}}</option>
                                        <option for="avisos" value="Si" >Si </option>
                                        <option for="avisos" value="No" >No </option>

                                    </select>
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Cantidad de trabajadores</label>
                                    <input type="text" placeholder="Cantidad de trabajadores" name="cantTrabajadores" value="{{$datosLocal->cantTrabajadores}}">
                                </div>
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Área total del establecimiento (metros cuadrados)</label>
                                    <input type="text" placeholder="Área total del establecimiento" name="areaLocal" value="{{$datosLocal->areaLocal}}" >
                                </div>

                            </div>

                            <div class="vali-form">
                              <div class="col-md-6 form-group1 ">
                                <label class="control-label">Ventas promedio mensuales</label>
                                <input type="text" placeholder="Ventas promedio mensuales" name="ventasPromedio" value="{{$datosLocal->ventasPromedio}}" >
                              </div>
                                <div class="col-md-6 form-group2">
                                 <label class="control-label">Consumo de Energía</label>
                                    <select name="consumoEnergia" for="consumoEnergia">
                                        <option selected="" value="{{$datosLocal->consumoEnergia}}">{{$datosLocal->consumoEnergia}} </option>
                                        <option for="consumoEnergia" value="150kw" >Hasta 150 KW </option>
                                        <option for="consumoEnergia" value="151-350kw" >Entre 151 y 350 KW </option>
                                        <option for="consumoEnergia" value="351+" >Más de 350 KW </option>


                                    </select>
                                </div>

                            </div>

                            <div class="vali-form">
                                  <div class="col-md-6 form-group1">
                                      <label class="control-label">Fecha de Inicio de Actividades</label>
                                      <input type="date" name="inicioActividades" value="{{$datosLocal->inicioActividades}}">
                                  </div>


                                  <div class="clearfix"> </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{route('comercio.show', $datosLocal->comercio_id)}}" class="btn btn-warning">Volver</a>
                            </div>
                            <div class="clearfix"> </div>
                        </form>

                        <!---->
                    </div>

                </div>
                <!--//grid-->
            </header>
            <div class="agileits-box-body clearfix">
                <div id="hero-area"></div>
            </div>
        </div>
    </div>
    <!--//agileinfo-grap-->

    <script src="js/app.js"></script>


@endsection
