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
                <h3>VER COMERCIO - {{ $comercio->nombre }}</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->


                        <div class="vali-form">
                            <div class="col-md-6 form-group1">
                                <img src="images/logo/{{ $comercio->logo }}" style="width:330px; height:330px; ">
                            </div>
                            <div class="col-md-6 form-group1 form-last">
                                <img src="qrcodes/{{ $comercio->qr }}" style="width:330px; height:330px; ">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                        <div class="validation-form">
                          <label style="color:red;">INFORMACIÓN DEL ESTABLECIMIENTO</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Tipo de Persona</label>
                                    <input type="text" name="tipoPersona" value="{{$com->tipoPersona}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">CC o NIT</label>
                                    <input type="text" placeholder="CC o NIT" disabled name="nit" value="{{ $com->nit }}">
                                </div>
                            </div>
                            <div class="vali-form">

                              <div class="col-md-6 form-group1">
                                  <label class="control-label">Descripción del establecimiento</label>
                                  <input type="text" name="descripcion" value="{{$com->descripcion}}" disabled>
                              </div>

                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Dirección del Notificaciones</label>
                                    <input type="text" placeholder="Dirección del Notificaciones" disabled name="dirNotificaciones" value="{{$com->dirNotificaciones}}">
                                 </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Establecimiento</label>
                                    <input type="text" placeholder="Dirección del Establecimiento" disabled name="dirEstablecimiento" value="{{$com->dirEstablecimiento}}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Barrio</label>
                                    <input type="text" name="barrio" value="{{$com->name}}, {{$com->upz}}" disabled>
                                </div>

                            </div>
                             <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Teléfono Fijo</label>
                                    <input type="text" placeholder="Teléfono Fijo" name="telefono" value="{{$com->telefono}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Celular</label>
                                    <input type="text" placeholder="Celular" name="celular" value="{{$com->celular}}" disabled>
                                </div>

                            </div>
                            <div class="vali-form">

                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Actividad Comercial</label>
                                    <input type="text" name="actComercial" value="{{$com->actComercial}}" disabled>
                                </div>

                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Categoría</label>
                                    <input type="text" name="categoria" value="{{$com->categoria}}" disabled>
                                </div>

                            </div>

                            <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                  <label class="control-label">Email<span class="text-danger">*</span></label>
                                  <input type="text" placeholder="Email" name="email" value="{{ $com->email }}" disabled>
                              </div>
                              <div class="clearfix"> </div>
                            </div>

                            <div class="clearfix"> </div>


                          <label style="color:red;">ESTADO DEL CONTRIBUYENTE</label>
                          <h2>IMPUESTOS REGISTRADOS AL DÍA</h2>

                          <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                @if($com->impuesto_id1 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->impuesto_id1}}" disabled>
                                @endif


                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                @if($com->impuesto_id2 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->impuesto_id2}}" disabled>
                                @endif
                              </div>

                          </div>
                          <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                @if($com->impuesto_id3 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->impuesto_id3}}" disabled>
                                @endif
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                @if($com->impuesto_id4 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->impuesto_id4}}" disabled>
                                @endif
                              </div>

                          </div>
                          <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                @if($com->impuesto_id5 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->impuesto_id5}}" disabled>
                                @endif
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                @if($com->impuesto_id6 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->impuesto_id6}}" disabled>
                                @endif
                              </div>

                          </div>
                          <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                @if($com->impuesto_id7 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->impuesto_id7}}" disabled>
                                @endif
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                @if($com->impuesto_id8 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->impuesto_id8}}" disabled>
                                @endif
                              </div>

                              <h2>REQUISITOS REGISTRADOS AL DÍA</h2>
                          </div>
                          <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                @if($com->requisito_id1 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->requisito_id1}}" disabled>
                                @endif
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                @if($com->requisito_id2 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->requisito_id2}}" disabled>
                                @endif
                              </div>

                          </div>
                          <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                @if($com->requisito_id3 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->requisito_id3}}" disabled>
                                @endif
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                @if($com->requisito_id4 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->requisito_id4}}" disabled>
                                @endif
                              </div>


                          </div>
                          <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                @if($com->requisito_id5 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->requisito_id5}}" disabled>
                                @endif
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                @if($com->requisito_id6 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->requisito_id6}}" disabled>
                                @endif
                              </div>
                          </div>
                          <div class="vali-form">
                              <div class="col-md-6 form-group1">
                                @if($com->requisito_id7 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->requisito_id7}}" disabled>
                                @endif
                              </div>
                              <div class="col-md-6 form-group1 form-last">
                                @if($com->requisito_id8 != '0')
                                  <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$com->requisito_id8}}" disabled>
                                @endif
                              </div>
                              <div class="clearfix"> </div>
                              <div class="vali-form">
                                <a href="{{route('comercio.edit', $comercio->id)}}" class="btn btn-primary">Editar</a>
                              </div>
                              <div class="clearfix"> </div>
                          </div>


                        </div>

                        <div class="validation-form">

                          @if($datos != null)
                          <label style="color:red;">INFORMACIÓN DEL ESTABLECIMIENTO</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Se encuentra sobre una vía principal o de alto tránsito?</label>
                                    <input type="text" name="viaPrincipal" placeholder="No se ha registrado esta información" value="{{$datos->viaPrincipal}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">¿El dueño trabaja en el establecimiento?</label>
                                    <input type="text" name="duenoTrabaja" placeholder="No se ha registrado esta información" value="{{$datos->duenoTrabaja}}" disabled>
                                </div>

                            </div>
                            <div class="vali-form">

                                <div class="col-md-6 form-group1">
                                    <label for="checkbox" class="control-label">Días de atención al público</label>
                                    <input type="text" name="diasLaborales" placeholder="No se ha registrado esta información" value="{{$datos->diasLaborales}}" disabled>
                                </div>

                                <div class="col-md-6 form-group1 form-last">
                                  <label class="control-label">Horario de atención al público</label>
                                  <input type="text" placeholder="Horario de atención al público" name="horario" value="{{$datos->horario}}" disabled>
                              </div>

                            </div>
                            <div class="vali-form">

                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Tipo de local</label>
                                    <input type="text" name="tipoLocal" placeholder="No se ha registrado esta información" value="{{$datos->tipoLocal}}" disabled>
                                </div>

                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">¿Tiene instalados avisos y tableros?</label>
                                    <input type="text" name="avisos" placeholder="No se ha registrado esta información" value="{{$datos->avisos}}" disabled>

                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Cantidad de trabajadores</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="cantTrabajadores" value="{{$datos->cantTrabajadores}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Área total del establecimiento</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="areaLocal" value="{{$datos->areaLocal}}" disabled>
                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Fecha de Inicio de Actividades</label>
                                    <input type="text" name="inicioActividades" placeholder="No se ha registrado esta información" value="{{$datos->inicioActividades}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                 <label class="control-label">Consumo de Energía</label>
                                 <input type="text" name="consumoEnergia" placeholder="No se ha registrado esta información" value="{{$datos->consumoEnergia}}" disabled>

                                </div>
                                <div class="vali-form">
                                      <div class="col-md-6 form-group1 ">
                                        <label class="control-label">Ventas promedio mensuales</label>
                                        <input type="text" placeholder="No se ha registrado esta información" name="ventasPromedio" value="{{$datos->ventasPromedio}}" disabled>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                                <div class="vali-form">
                                  <a href="{{route('datos.edit', $datos->id)}}" class="btn btn-primary">Editar Datos</a>
                                  <a href="{{route('datos.destroy', $datos->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar?')">Eliminar Datos</a>
                                </div>
                            </div>
                            @else

                            <label style="color:red;">INFORMACIÓN DEL ESTABLECIMIENTO</label>
                              <div class="vali-form">
                                  <div class="col-md-6 form-group1">
                                      <label class="control-label">¿Se encuentra sobre una vía principal o de alto tránsito?</label>
                                      <input type="text" name="viaPrincipal" placeholder="No se ha registrado esta información" value="" disabled>
                                  </div>
                                  <div class="col-md-6 form-group1 form-last">
                                      <label class="control-label">¿El dueño trabaja en el establecimiento?</label>
                                      <input type="text" name="duenoTrabaja" placeholder="No se ha registrado esta información" value="" disabled>
                                  </div>

                              </div>
                              <div class="vali-form">
                                  <div class="col-md-6 form-group1">
                                    <label for="checkbox" class="control-label">Días de atención al público</label>
                                    <input type="text" name="diasLaborales" placeholder="No se ha registrado esta información" value="" disabled>
                                        <div class="clearfix"> </div>
                                  </div>
                                  <div class="col-md-6 form-group1 form-last ">
                                    <label class="control-label">Horario de atención al público</label>
                                    <input type="text" placeholder="Horario de atención al público" name="horario" value="" disabled>
                                </div>
                              </div>
                              <div class="vali-form">

                                  <div class="col-md-6 form-group1 ">
                                      <label class="control-label">Tipo de local</label>
                                      <input type="text" name="tipoLocal" placeholder="No se ha registrado esta información" value="" disabled>
                                  </div>
                                  <div class="col-md-6 form-group1 form-last">
                                      <label class="control-label">¿Tiene instalados avisos y tableros?</label>
                                      <input type="text" name="avisos" placeholder="No se ha registrado esta información" value="" disabled>

                                  </div>
                              </div>
                              <div class="vali-form">
                                  <div class="col-md-6 form-group1 ">
                                      <label class="control-label">Cantidad de trabajadores</label>
                                      <input type="text" placeholder="No se ha registrado esta información" name="cantTrabajadores" value="" disabled>
                                  </div>
                                  <div class="col-md-6 form-group1 ">
                                      <label class="control-label">Área total del establecimiento</label>
                                      <input type="text" placeholder="No se ha registrado esta información" name="areaLocal" value="" disabled>
                                  </div>

                              </div>

                              <div class="vali-form">
                                  <div class="col-md-6 form-group1">
                                    <label class="control-label">Ventas promedio mensuales</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="ventasPromedio" value="" disabled>
                                  </div>
                                  <div class="col-md-6 form-group1 form-last">
                                   <label class="control-label">Consumo de Energía</label>
                                   <input type="text" name="consumoEnergia" placeholder="No se ha registrado esta información" value="" disabled>

                                  </div>

                              </div>
                              <div class="vali-form">
                                    <div class="col-md-6 form-group1 ">
                                      <label class="control-label">Fecha de Inicio de Actividades</label>
                                      <input type="text" name="inicioActividades" placeholder="No se ha registrado esta información" value="" disabled>

                                  </div>
                                    <div class="clearfix"> </div>

                              </div>
                              <div class="vali-form">
                                <a href="{{route('datos.create', $comercio->id)}}" class="btn btn-primary">Registrar Datos</a>
                              </div>
                              <div class="clearfix"> </div>
                            @endif
                          </div>

                        <div class="validation-form">

                            <label style="color:red;">DATOS BÁSICOS DEL REPRESENTANTE LEGAL Y/O PROPIETARIO</label>
                            @if($rep != null)
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Representante legal</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="nombreRepresentante" value="{{$rep->nombreRepresentante}}" disabled>
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Cédula de Ciudadania</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="ccRep" value="{{$rep->ccRep}}" disabled>
                                 </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Notificaciones</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="dirNotificacionRep" value="{{$rep->dirNotificacionRep}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Nivel de Estudios</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="nivelEstudioRep" value="{{$rep->nivelEstudioRep}}" disabled>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">Teléfono fijo</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="telRepresentante" value="{{$rep->telRepresentante}}" disabled>
                                 </div>


                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Celular</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="celRepresentante" value="{{$rep->celRepresentante}}" disabled>
                                 </div>
                                 <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Whatsapp</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="waRepresentante" value="{{$rep->waRepresentante}}" disabled>
                                 </div>
                                 <div class="clearfix"> </div>
                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Propietario</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="nombrePropietario" value="{{$rep->nombrePropietario}}" disabled>
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Cédula de Ciudadania</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="ccPropietario" value="{{$rep->ccPropietario}}" disabled>
                                 </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Notificaciones</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="dirPropietario" value="{{$rep->dirPropietario}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Teléfono</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="telPropietario" value="{{$rep->telPropietario}}" disabled>
                                </div>

                            </div>

                            <div class="clearfix"> </div>

                            <div class="vali-form">
                              <a href="{{route('representante.edit', $rep->id)}}" class="btn btn-primary">Editar Datos</a>
                              <a href="{{route('representante.destroy', $rep->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar?')">Eliminar Datos</a>
                            </div>
                            <div class="clearfix"> </div>
                            @else
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Representante legal</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="nombreRepresentante" value="" disabled>
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Cédula de Ciudadania</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="ccRep" value="" disabled>
                                 </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Notificaciones</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="dirNotificacionRep" value="" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Nivel de Estudios</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="nivelEstudioRep" value="" disabled>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">Teléfono fijo</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="telRepresentante" value="" disabled>
                                 </div>


                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Celular</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="celRepresentante" value="" disabled>
                                 </div>
                                 <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Whatsapp</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="waRepresentante" value="" disabled>
                                 </div>
                                 <div class="clearfix"> </div>
                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Propietario</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="nombrePropietario" value="" disabled>
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Cédula de Ciudadania</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="ccPropietario" value="" disabled>
                                 </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Notificaciones</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="dirPropietario" value="" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Teléfono</label>
                                    <input type="text" placeholder="No se ha registrado esta información" required="" name="telPropietario" value="" disabled>
                                </div>

                            </div>

                            <div class="clearfix"> </div>

                            <div class="vali-form">
                              <a href="{{route('representante.create', $comercio->id)}}" class="btn btn-primary">Registrar Datos</a>
                            </div>
                            <div class="clearfix"> </div>
                            @endif
                        </div>
                        <div class="validation-form">

                            <label style="color:red;">REDES SOCIALES E INTERNET</label>

                            @if($redes != null)
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Facebook</label>
                                    <input type="text" placeholder="No se ha registrado esta información"  name="facebook" value="{{$redes->facebook}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Twitter</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="twitter" value="{{$redes->twitter}}" disabled>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Instagram</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="instagram" value="{{$redes->instagram}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Website</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="url" value="{{$redes->url}}" disabled>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Latitud</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="lat" required="" value="{{$redes->lat}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Longitud</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="long" required="" value="{{$redes->long}}" disabled>
                                </div>

                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                              <a href="{{route('redes.edit', $redes->id)}}" class="btn btn-primary">Editar Datos</a>
                              <a href="{{route('redes.destroy', $redes->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar?')">Eliminar Datos</a>
                            </div>
                            <div class="clearfix"> </div>
                            @else

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Facebook</label>
                                    <input type="text" placeholder="No se ha registrado esta información"  name="facebook"  disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Twitter</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="twitter"  disabled>
                                </div>

                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Instagram</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="instagram"  disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Website</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="url"  disabled>
                                </div>

                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Latitud</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="lat" required=""  disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Longitud</label>
                                    <input type="text" placeholder="No se ha registrado esta información" name="long" required=""  disabled>
                                </div>

                                <div class="clearfix"> </div>
                            </div>

                            <div class="vali-form">
                              <a href="{{route('redes.create', $comercio->id)}}" class="btn btn-primary">Registrar Datos</a>

                            </div>
                            <div class="clearfix"> </div>
                            @endif
                          </div>

                        <div class="validation-form">

                            <label style="color:red;">GESTIÓN DE MERCADO</label>
                            @if($gestion != null)
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Conoce que es la economía digital?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->economiaDigital}}" disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">¿Considera que el Internet puede ayudarle a mejorar sus ventas?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->internetAyuda}}" disabled>

                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Su empresa cuenta con un equipo de ventas?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->equipoVentas}}" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">¿Su empresa maneja un software en el que se realice la contabilidad, facturación, compras o gastos, nomina, inventario, marketing, flujo de caja, etc?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->manejaSoftware}}" disabled>

                                </div>
                               <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                <label for="checkbox" class="col-sm-12 control-label">Medios por los cuales realizan publicidad o difusión de sus productos o servicios.</label>

                                <div class="clearfix"> </div>
                                    <div class="col-sm-12">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="radio" {{ $gestion->radio ? 'checked':'1' }}> Radio</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="volantes" {{ $gestion->volantes ? 'checked':'1' }}> Carteleras, Volantes, Afiches</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="web" {{ $gestion->web ? 'checked':'1' }}> Sitio Web</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mFacebook" {{ $gestion->mFacebook ? 'checked':'1' }}> Facebook</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mTwitter" {{ $gestion->mTwitter ? 'checked':'1' }}> Twitter</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mInstagram" {{ $gestion->mInstagram ? 'checked':'1' }}> Instagram</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mYoutube" {{ $gestion->mYoutube ? 'checked':'1' }}> Youtube</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mWhatsapp" {{ $gestion->mWhatsapp ? 'checked':'1' }}> Whatsapp</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="ferias" {{ $gestion->ferias ? 'checked':'1' }}> Ferias o eventos</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="noHace" {{ $gestion->noHace ? 'checked':'1' }}> No hace publicidad</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                             <div class="vali-form">
                                <label for="checkbox" class="col-sm-12 control-label">De las siguientes herramientas, ¿cuales utiliza?.</label>

                                <div class="clearfix"> </div>
                                    <div class="col-sm-12">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="emailD" {{ $gestion->emailD ? 'checked':'1' }}> Email</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="facebookD" {{ $gestion->facebookD ? 'checked':'1' }}> Facebook</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="twitterD" {{ $gestion->twitterD ? 'checked':'1' }}> Twitter</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="instagramD" {{ $gestion->instagramD ? 'checked':'1' }}> Instagram</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="youtubeD" {{ $gestion->youtubeD ? 'checked':'1' }}> Youtube</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="whatsappD" {{ $gestion->whatsappD ? 'checked':'1' }}> Whatsapp</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="otroD" {{ $gestion->otroD ? 'checked':'1' }}> Otro</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                           <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Considera en un plazo de 6 meses ampliar su negocio?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->ampliarNegocio}}" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">¿Le interesaría hacer publicidad de su negocio por medio de Internet y Redes Sociales?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->interesaPublicidadRedes}}" disabled>

                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <label>¿Con qué frecuencia usa estas herramientas?</label>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Internet</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaInternet}}" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Correo electrónico</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaEmail}}" disabled>

                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Dropbox, Drive</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaDrive}}" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Facebook</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaFacebook}}" disabled>

                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Twitter</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaTwitter}}" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Instagram</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaInstagram}}" disabled>

                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Youtube</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaYoutube}}" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Whatsapp</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaWhatsapp}}" disabled>

                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Algún programa de retoque de imagenes/videos</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaEditores}}" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Word/Excel</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->usaWord}}" disabled>

                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Cuanto invierte ud mensualmente en publicidad?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$gestion->inversionPublicidad}}" disabled>

                                </div>
                                 <div class="clearfix"> </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <a href="{{route('gestion.edit', $gestion->id)}}" class="btn btn-primary">Editar Datos</a>
                                <a href="{{route('gestion.destroy', $gestion->id)}}" class="btn btn-warning" onclick="return confirm('¿Seguro desea eliminar?')">Eliminar Datos</a>
                            </div>

                            <div class="clearfix"> </div>
                            @else
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Conoce que es la economía digital?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">¿Considera que el Internet puede ayudarle a mejorar sus ventas?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Su empresa cuenta con un equipo de ventas?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">¿Su empresa maneja un software en el que se realice la contabilidad, facturación, compras o gastos, nomina, inventario, marketing, flujo de caja, etc?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" disabled>

                                </div>
                               <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form">
                                <label for="checkbox" class="col-sm-12 control-label">Medios por los cuales realizan publicidad o difusión de sus productos o servicios.</label>

                                <div class="clearfix"> </div>
                                    <div class="col-sm-12">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="radio" > Radio</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="volantes" > Carteleras, Volantes, Afiches</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="web"> Sitio Web</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mFacebook" > Facebook</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mTwitter" > Twitter</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mInstagram" > Instagram</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mYoutube"> Youtube</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="mWhatsapp" > Whatsapp</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="ferias"> Ferias o eventos</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="noHace" > No hace publicidad</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                             <div class="vali-form">
                                <label for="checkbox" class="col-sm-12 control-label">De las siguientes herramientas, ¿cuales utiliza?.</label>

                                <div class="clearfix"> </div>
                                    <div class="col-sm-12">
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="Email" > Email</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="facebookD" > Facebook</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="twitterD" > Twitter</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="instagramD" > Instagram</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="youtubeD" > Youtube</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="whatsappD" > Whatsapp</label></div>
                                        <div class="checkbox-inline"><label><input type="checkbox" value="1" disabled name="otroD" > Otro</label></div>
                                    </div>
                                    <div class="clearfix"> </div>
                            </div>
                           <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Considera en un plazo de 6 meses ampliar su negocio?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" value="{{$comercio->ampliarNegocio}}" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">¿Le interesaría hacer publicidad de su negocio por medio de Internet y Redes Sociales?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" disabled>

                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <label>¿Con qué frecuencia usa estas herramientas?</label>
                            <div class="clearfix"> </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Internet</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Correo electrónico</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Dropbox, Drive</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información" disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Facebook</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Twitter</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Instagram</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Youtube</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Whatsapp</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Algún programa de retoque de imagenes/videos</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Word/Excel</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">¿Cuanto invierte ud mensualmente en publicidad?</label>
                                    <input type="text" name="" placeholder="No se ha registrado esta información"  disabled>

                                </div>
                                 <div class="clearfix"> </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <a href="{{route('gestion.create', $comercio->id)}}" class="btn btn-primary">Registrar Datos</a>

                            </div>

                            <div class="clearfix"> </div>

                            @endif


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

@endsection
