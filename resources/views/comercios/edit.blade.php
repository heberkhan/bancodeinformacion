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
                <h3>EDITAR {{$com->nombre}}</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('comercio.update', $com->id) }}" enctype="multipart/form-data" method="get" name="form1" id="form1">
                            {!! csrf_field() !!}
                            <label style="color:red;">INFORMACIÓN DEL ESTABLECIMIENTO</label>

                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Tipo de Persona<span class="text-danger">*</span></label>
                                    <select for="tipoPersona" name="tipoPersona" required="">
                                        <option selected="{{$com->tipoPersona}}" >{{$com->tipoPersona}} </option>
                                        <option for="tipoPersona" value="Natural">Natural</option>
                                        <option for="tipoPersona" value="Jurídica">Jurídica</option>
                                        <option for="tipoPersona" value="Consorcio o Unión Temporal">Consorcio o Unión Temporal</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">CC o NIT<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="CC o NIT" required="" name="nit" value="{{$com->nit}}">
                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Establecimiento<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Nombre del Establecimiento" required="" name="nombre" value="{{$com->nombre}}">
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Dirección del Notificaciones</label>
                                    <input type="text" placeholder="Dirección del Notificaciones"  name="dirNotificaciones" value="{{$com->dirNotificaciones}}">
                                 </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Establecimiento<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Dirección del Establecimiento" required="" name="dirEstablecimiento" value="{{$com->dirEstablecimiento}}">
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Barrio<span class="text-danger">*</span></label>
                                    <select name="barrio" for="barrio" >
                                        <option selected="" value="{{$com->barrio_id}}">{{$com->name}}, {{$com->upz}}</option>

                                        @foreach($barrios as $barrio)
                                        <option for="barrio" value="{{ $barrio->id }}" >{{ $barrio->name }}, {{ $barrio->upz }} </option>
                                        @endforeach

                                    </select>
                                </div>

                            </div>
                             <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Teléfono Fijo</label>
                                    <input type="text" placeholder="Teléfono Fijo" name="telefono" value="{{$com->telefono}}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Celular</label>
                                    <input type="text" placeholder="Celular" name="celular" value="{{$com->celular}}">
                                </div>

                            </div>
                            <div class="vali-form">

                                <div class="col-md-6 form-group2 group-mail">
                                    <label class="control-label">Actividad Comercial<span class="text-danger">*</span></label>
                                    <select name="actComercial" for="actComercial" required="" id="actComercial" onchange="cargarCategorias();">
                                        <option selected="" value="{{$com->actComercial}}">{{$com->actComercial}} </option>


                                    </select>


                                </div>

                                <div class="col-md-6 form-group2 group-mail">

                                    <label class="control-label">Categoría<span class="text-danger">*</span></label>
                                    <select name="categoria" for="categoria" required="" id="categoria">
                                        <option selected="" value="{{$com->categoria}}"> {{$com->categoria}} </option>
                                    </select>

                                </div>
                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Email<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Email" name="email" value="{{ $com->email }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Etiquetas<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Etiquetas" required="" name="etiquetas" value="{{$com->etiquetas}}" id="tags">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <label style="color:red;">DESCRIPCIÓN DEL ESTABLECIMIENTO</label>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Descripción del establecimiento<span class="text-danger">*</span></label>
                                    <div class="col-md-12" class="form-control"><textarea name="descripcion" id="txtarea1" cols="180" rows="3" class="form-control"></textarea></div>
                                    <p class="help-block">*máximo 50 caracteres</p>
                                </div>
                                <div class="vali-form form-last">
                                    <label for="logo">Imagen o logo<span class="text-danger">*</span></label>
                                    <input type="file" id="logo" name="logo">
                                    <p class="help-block">tamaño mínimo recomendado 300 x 300 px</p>
                                    <p class="help-block">Formatos requeridos: jpeg, png</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>

                          </div>
                        </div>
                        <div class="validation-system">
                          <div class="validation-form">

 <!-- ESTADO DEL CONTRIBUYENTE -->

                            <label style="color:red;">ESTADO DEL CONTRIBUYENTE</label>
                            <div class="vali-form">
                              <!-- IMPUESTO 1 -->
                                <div class="col-md-6 form-group2 group-mail">
                                  <label for="">Impuesto en que se encuentra al día</label>

                                  <select class="" name="impuesto_id1" for="impuesto_id1">
                                    @if($com->impuesto_id1 != '0')
                                    <optgroup label="Opción Seleccionada">

                                      <option value="{{$com->impuesto_id1}}" selected>{{$com->impuesto_id1}}</option>
                                    </optgroup>

                                    @else
                                    <optgroup label="Más opciones">

                                    </optgroup>
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @endif
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>

                                  @if($com->impuesto_id2 == '0')
                                  <input type="checkbox" name="imp" value="" onclick="CheckOtros('impuesto2', this)" id="imp">
                                  <label for="imp">Añadir un nuevo impuesto</label>
                                  @endif
                                </div>
                                <!-- FIN IMPUESTO 1 -->
                                <!-- IMPUESTO 2 -->
                                @if($com->impuesto_id2 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto2">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id2">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->impuesto_id3 == '0')
                                  <input type="checkbox" name="imp2" value="" onclick="CheckOtros('impuesto3', this)" id="imp2">
                                  <label for="imp2">Añadir un nuevo impuesto</label>
                                  @endif
                                </div>
                                @else
                                <div class="col-md-6 form-group2 group-mail" id="impuesto2">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id2">
                                    <option value="{{$com->impuesto_id2}}">{{$com->impuesto_id2}}</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->impuesto_id3 == '0')
                                  <input type="checkbox" name="imp2" value="" onclick="CheckOtros('impuesto3', this)" id="imp2">
                                  <label for="imp2">Añadir un nuevo impuesto</label>
                                  @endif
                                </div>
                                @endif
                                <!-- FIN IMPUESTO 2 -->
                            </div>
                            <div class="vali-form">
                              <!-- IMPUESTO 3 -->
                              @if($com->impuesto_id3 == '0')
                                  <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto3">
                                    <label for="">Impuesto en que se encuentra al día</label>
                                    <select class="" name="impuesto_id3">
                                      <option value="">SELECCIONE UNA OPCIÓN</option>
                                      @foreach($impuestos as $impuesto)
                                      <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                      @endforeach
                                    </select>
                                    @if($com->impuesto_id4 == '0')
                                        <input type="checkbox" name="imp3" value="" onclick="CheckOtros('impuesto4', this)" id="imp3">
                                        <label for="imp3">Añadir un nuevo impuesto</label>
                                    @endif
                                  </div>
                                @else
                                    <div class="col-md-6 form-group2 group-mail"  id="impuesto3">
                                      <label for="">Impuesto en que se encuentra al día</label>
                                      <select class="" name="impuesto_id3">
                                        <option value="{{$com->impuesto_id3}}">{{$com->impuesto_id3}}</option>
                                        @foreach($impuestos as $impuesto)
                                        <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                        @endforeach
                                      </select>
                                      @if($com->impuesto_id4 =='0')
                                          <input type="checkbox" name="imp3" value="" onclick="CheckOtros('impuesto4', this)" id="imp3">
                                          <label for="imp3">Añadir un nuevo impuesto</label>
                                      @endif
                                    </div>
                                @endif

                                <!-- FIN IMPUESTO 3 -->
                                @if($com->impuesto_id4 == '0')
                                    <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto4">
                                      <label for="">Impuesto en que se encuentra al día</label>
                                      <select class="" name="impuesto_id4">
                                        <option value="">SELECCIONE UNA OPCIÓN</option>
                                        @foreach($impuestos as $impuesto)
                                        <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                        @endforeach
                                      </select>
                                      @if($com->impuesto_id4 == '0')
                                          <input type="checkbox" name="imp4" value="" onclick="CheckOtros('impuesto5', this)" id="imp4">
                                          <label for="imp4">Añadir un nuevo impuesto</label>
                                      @endif
                                    </div>
                                @else
                                    <div class="col-md-6 form-group2 group-mail" id="impuesto4">
                                      <label for="">Impuesto en que se encuentra al día</label>
                                      <select class="" name="impuesto_id4">
                                        <option value="{{$com->impuesto_id4}}">{{$com->impuesto_id4}}</option>
                                        @foreach($impuestos as $impuesto)
                                        <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                        @endforeach
                                      </select>
                                      @if($com->impuesto_id5 == '0')
                                          <input type="checkbox" name="imp4" value="" onclick="CheckOtros('impuesto5', this)" id="imp4">
                                          <label for="imp4">Añadir un nuevo impuesto</label>
                                      @endif
                                    </div>
                                @endif
                            </div>
                            <!-- FIN IMPUESTO 4 -->

                            <!-- IMPUESTO 5 -->
                            <div class="vali-form">
                              @if($com->impuesto_id5 == '0')
                                  <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto5">
                                    <label for="">Impuesto en que se encuentra al día</label>
                                    <select class="" name="impuesto_id5">
                                      <option value="">SELECCIONE UNA OPCIÓN</option>
                                      @foreach($impuestos as $impuesto)
                                      <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                      @endforeach
                                    </select>
                                    @if($com->impuesto_id6 == '0')
                                        <input type="checkbox" name="imp5" value="" onclick="CheckOtros('impuesto6', this)" id="imp5">
                                        <label for="imp5">Añadir un nuevo impuesto</label>
                                    @endif
                                  </div>
                              @else
                                  <div class="col-md-6 form-group2 group-mail" id="impuesto5">
                                    <label for="">Impuesto en que se encuentra al día</label>
                                    <select class="" name="impuesto_id5">
                                      <option value="{{$com->impuesto_id5}}">{{$com->impuesto_id5}}</option>
                                      @foreach($impuestos as $impuesto)
                                      <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                      @endforeach
                                    </select>
                                    @if($com->impuesto_id6 == '0')
                                        <input type="checkbox" name="imp5" value="" onclick="CheckOtros('impuesto6', this)" id="imp5">
                                        <label for="imp5">Añadir un nuevo impuesto</label>
                                    @endif
                                  </div>

                              @endif
                              <!-- FIN IMPUESTO 5 -->

                              <!-- IMPUESTO 6 -->
                              @if($com->impuesto_id6 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto6">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id6">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->impuesto_id7 == 0)
                                  <input type="checkbox" name="imp6" value="" onclick="CheckOtros('impuesto7', this)" id="imp6">
                                  <label for="imp6">Añadir un nuevo impuesto</label>
                                  @endif
                                </div>
                              @else
                                <div class="col-md-6 form-group2 group-mail" id="impuesto6">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id6">
                                    <option value="{{$com->impuesto_id6}}">{{$com->impuesto_id6}}</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->impuesto_id7 == '0')
                                  <input type="checkbox" name="imp6" value="" onclick="CheckOtros('impuesto7', this)" id="imp6">
                                  <label for="imp6">Añadir un nuevo impuesto</label>
                                  @endif
                                </div>
                              @endif
                            </div>
                            <!-- FIN IMPUESTO 6 -->

                            <!-- IMPUESTO 7 -->
                            <div class="vali-form">
                              @if($com->impuesto_id7 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto7">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id7">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->impuesto_id8 == '0')
                                  <input type="checkbox" name="imp7" value="" onclick="CheckOtros('impuesto8', this)" id="imp7">
                                  <label for="imp7">Añadir un nuevo impuesto</label>
                                  @endif
                                </div>
                              @else
                                  <div class="col-md-6 form-group2 group-mail" id="impuesto7">
                                    <label for="">Impuesto en que se encuentra al día</label>
                                    <select class="" name="impuesto_id7">
                                      <option value="{{$com->impuesto_id7}}">{{$com->impuesto_id7}}</option>
                                      @foreach($impuestos as $impuesto)
                                      <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                      @endforeach
                                    </select>
                                    @if($com->impuesto_id8 == '0')
                                    <input type="checkbox" name="imp7" value="" onclick="CheckOtros('impuesto8', this)" id="imp7">
                                    <label for="imp7">Añadir un nuevo impuesto</label>
                                    @endif
                                  </div>
                                @endif
                                <!-- FIN IMPUESTO 7   -->

                                <!-- IMPUESTO 8 -->

                              @if($com->impuesto_id8 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="impuesto8">
                                  <label for="">Impuesto en que se encuentra al día</label>
                                  <select class="" name="impuesto_id8">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($impuestos as $impuesto)
                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              @else
                                  <div class="col-md-6 form-group2 group-mail" id="impuesto8">
                                    <label for="">Impuesto en que se encuentra al día</label>
                                    <select class="" name="impuesto_id8">
                                      <option value="{{$com->impuesto_id8}}">{{$com->impuesto_id8}}</option>
                                      @foreach($impuestos as $impuesto)
                                      <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                            </div>
                            @endif
                            <!-- FIN IMPUESTO 8 -->


                            <div class="clearfix">  </div>
                            <label style="color:red;">REQUISITOS</label>

                            <!-- REQUISITO 1   -->
                            <div class="vali-form">
                              @if($com->requisito_id1 == '0')
                                <div class="col-md-6 form-group2 group-mail">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id1">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->requisito_id2 == '0')
                                  <input type="checkbox" name="req" value="" onclick="CheckOtros('requisito2', this)" id="req">
                                  <label for="req">Añadir un nuevo requisito</label>
                                  @endif
                                </div>
                              @else
                                <div class="col-md-6 form-group2 group-mail">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id1">
                                    <option value="{{$com->requisito_id1}}">{{$com->requisito_id1}}</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->requisito_id2 == '0')
                                  <input type="checkbox" name="req" value="" onclick="CheckOtros('requisito2', this)" id="req">
                                  <label for="req">Añadir un nuevo requisito</label>
                                  @endif
                                </div>
                            @endif
                                <!-- FIN REQUISITO 1 -->
                                <!-- REQUISITO 2 -->
                              @if($com->requisito_id2 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito2">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id2">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->requisito_id3 == '0')
                                  <input type="checkbox" name="req2" value="" onclick="CheckOtros('requisito3', this)" id="req2">
                                  <label for="req2">Añadir un nuevo requisito</label>
                                  @endif
                                </div>
                              @else
                                <div class="col-md-6 form-group2 group-mail" id="requisito2">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id2">
                                    <option value="{{$com->requisito_id2}}">{{$com->requisito_id2}}</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->requisito_id3 == '0')
                                  <input type="checkbox" name="req2" value="" onclick="CheckOtros('requisito3', this)" id="req2">
                                  <label for="req2">Añadir un nuevo requisito</label>
                                  @endif
                                </div>
                              @endif

                              <!-- FIN REQUISITO 2   -->

                              <!-- REQUISITO 3 -->
                            </div>
                            <div class="vali-form">
                              @if($com->requisito_id3 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito3">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id3">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                @if($com->requisito_id4 == '0')
                                  <input type="checkbox" name="req3" value="" onclick="CheckOtros('requisito4', this)" id="req3">
                                  <label for="req3">Añadir un nuevo requisito</label>
                                @endif
                                </div>
                              @else
                                  <div class="col-md-6 form-group2 group-mail" id="requisito3">
                                    <label for="">Requisito Cumplido</label>
                                    <select class="" name="requisito_id3">
                                      <option value="{{$com->requisito_id3}}">{{$com->requisito_id3}}</option>
                                      @foreach($requisitos as $requisito)
                                      <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                      @endforeach
                                    </select>
                                  @if($com->requisito_id4 == '0')
                                    <input type="checkbox" name="req3" value="" onclick="CheckOtros('requisito4', this)" id="req3">
                                    <label for="req3">Añadir un nuevo requisito</label>
                                  @endif
                                  </div>
                              @endif

                              <!-- FIN REQUISITO 3      -->

                              <!-- REQUISITO 4 -->
                              @if($com->requisito_id4 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito4">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id4">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->requisito_id5 == '0')
                                  <input type="checkbox" name="req4" value="" onclick="CheckOtros('requisito5', this)" id="req4">
                                  <label for="req4">Añadir un nuevo requisito</label>
                                  @endif
                                </div>
                              @else
                                  <div class="col-md-6 form-group2 group-mail" id="requisito4">
                                    <label for="">Requisito Cumplido</label>
                                    <select class="" name="requisito_id4">
                                      <option value="{{$com->requisito_id4}}">{{$com->requisito_id4}}</option>
                                      @foreach($requisitos as $requisito)
                                      <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                      @endforeach
                                    </select>
                                    @if($com->requisito_id5 == '0')
                                    <input type="checkbox" name="req4" value="" onclick="CheckOtros('requisito5', this)" id="req4">
                                    <label for="req4">Añadir un nuevo requisito</label>
                                    @endif
                                  </div>
                              @endif
                            </div>

                            <!-- FIN REQUISITO 4 -->

                            <!-- REQUISITO 5 -->
                            <div class="vali-form">
                              @if($com->requisito_id5 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito5">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id5">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->requisito_id6 == '0')
                                  <input type="checkbox" name="req5" value="" onclick="CheckOtros('requisito6', this)" id="req5">
                                  <label for="req5">Añadir un nuevo requisito</label>
                                  @endif
                                </div>
                              @else
                                  <div class="col-md-6 form-group2 group-mail" id="requisito5">
                                    <label for="">Requisito Cumplido</label>
                                    <select class="" name="requisito_id5">
                                      <option value="{{$com->requisito_id5}}">{{$com->requisito_id5}}</option>
                                      @foreach($requisitos as $requisito)
                                      <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                      @endforeach
                                    </select>
                                    @if($com->requisito_id6 == '0')
                                    <input type="checkbox" name="req5" value="" onclick="CheckOtros('requisito6', this)" id="req5">
                                    <label for="req5">Añadir un nuevo requisito</label>
                                    @endif
                                  </div>
                                @endif

                                <!-- FIN REQUISITO 5 -->
                                <!-- REQUISITO 6 -->

                                @if($com->requisito_id6 == '0')
                                    <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito6">
                                      <label for="">Requisito Cumplido</label>
                                      <select class="" name="requisito_id6">
                                        <option value="">SELECCIONE UNA OPCIÓN</option>
                                        @foreach($requisitos as $requisito)
                                        <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                        @endforeach
                                      </select>
                                      @if($com->requisito_id7 == '0')
                                      <input type="checkbox" name="req6" value="" onclick="CheckOtros('requisito7', this)" id="req6">
                                      <label for="req6">Añadir un nuevo requisito</label>
                                      @endif
                                    </div>
                                @else
                                    <div class="col-md-6 form-group2 group-mail" id="requisito6">
                                      <label for="">Requisito Cumplido</label>
                                      <select class="" name="requisito_id6">
                                        <option value="{{$com->requisito_id6}}">{{$com->requisito_id6}}</option>
                                        @foreach($requisitos as $requisito)
                                        <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                        @endforeach
                                      </select>
                                      @if($com->requisito_id7 == '0')
                                      <input type="checkbox" name="req6" value="" onclick="CheckOtros('requisito7', this)" id="req6">
                                      <label for="req6">Añadir un nuevo requisito</label>
                                      @endif
                                    </div>
                                @endif

                            </div>
                             <!-- FIN REQUISITO 6 -->

                             <!-- REQUISITO 7 -->
                            <div class="vali-form">
                              @if($com->requisito_id7 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito7">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id7">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                  @if($com->requisito_id8 == '0')
                                  <input type="checkbox" name="req7" value="" onclick="CheckOtros('requisito8', this)" id="req7">
                                  <label for="req7">Añadir un nuevo requisito</label>
                                  @endif
                                </div>
                              @else
                                  <div class="col-md-6 form-group2 group-mail" id="requisito7">
                                    <label for="">Requisito Cumplido</label>
                                    <select class="" name="requisito_id7">
                                      <option value="{{$com->requisito_id7}}">{{$com->requisito_id7}}</option>
                                      @foreach($requisitos as $requisito)
                                      <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                      @endforeach
                                    </select>
                                    @if($com->requisito_id8 == '0')
                                    <input type="checkbox" name="req7" value="" onclick="CheckOtros('requisito8', this)" id="req7">
                                    <label for="req7">Añadir un nuevo requisito</label>
                                    @endif
                                  </div>
                              @endif
                              <!-- FIN REQUISITO 7     -->
                              <!-- REQUISITO 8 -->
                              @if($com->requisito_id8 == '0')
                                <div class="col-md-6 form-group2 group-mail" style="display: none" id="requisito8">
                                  <label for="">Requisito Cumplido</label>
                                  <select class="" name="requisito_id8">
                                    <option value="">SELECCIONE UNA OPCIÓN</option>
                                    @foreach($requisitos as $requisito)
                                    <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              @else
                                  <div class="col-md-6 form-group2 group-mail" id="requisito8">
                                    <label for="">Requisito Cumplido</label>
                                    <select class="" name="requisito_id8">
                                      <option value="{{$com->requisito_id8}}">{{$com->requisito_id8}}</option>
                                      @foreach($requisitos as $requisito)
                                      <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                              @endif

                              <!-- FIN REQUISITO 8     -->
                            </div>

                            <!-- FIN REQUISITOS -->

                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{route('comercio.show', $com->id)}}" class="btn btn-danger">Volver</a>
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

<script type="text/javascript">
function cargarActividaes() {
  var array = ["Comercial", "Financiero", "Industrial", "Servicios", "Otros"];
  array.sort();
  addOptions("actComercial", array);
}


//Función para agregar opciones a un <select>.
function addOptions(domElement, array) {
  var selector = document.getElementsByName(domElement)[0];
  for (provincia in array) {
      var opcion = document.createElement("option");
      opcion.text = array[provincia];
      // Añadimos un value a los option para hacer mas facil escoger los pueblos
      opcion.value = array[provincia].toLowerCase()
      selector.add(opcion);
  }
}



function cargarCategorias() {
  // Objeto de provincias con pueblos
  var listaPueblos = {
    comercial: ["Ferreterías", "Droguerías", "Casas de Cambio", "Restaurantes", "Agencias de viaje", "Moteles", "Floristerías", "Inmobiliarias", "Disfraces", "Librerías", "Teléfonos", "Papelerías", "Cades, Supercades y Rapicades", "Peluquerías", "Tiendas Naturistas", "Restaurantes a Domicilio", "Centro de belleza y estética",
     "Supermercados", "Ópticas", "Vidrios", "Productos Químicos", "Repuestos para motocicletas", "Fundaciones", "Materiales eléctricos", "Panaderías", "Bicicletas", "Agencias de publicidad", "Instrumentos musicales", "Pastelería", "Maderas", "Constructoras",
    "Llantas", "Dotaciones para empresas", "Comidas rápidas", "Viveros", "Asaderos", "Artículos ortopédicos", "Artículos para adultos", "Reciclajes", "Estampados", "Radiodifusoras", "Farmacias" ],
    financiero: ["Bancos"],
    industrial: ["Plásticos", "Telas", "Repuestos automotrices", "Confecciones", "Uniformes", "Aire acondicionado"],
    servicios: ["Hoteles", "Transporte terrestre de pasajeros", "Fondo de pensiones y cesantías", "Clínicas veterinarias", "Taxis", "Agencias de empleo", "Laboratorio Clínico", "Notarías", "Salones para recepciones", "Clínicas",
                "Escuelas de fúlbol", "Iglesias y parroquias católicas", "Iglesias", "Empleos temporales", "Centros de rehabilitación", "Ecografías", "Abogados", "Terminales de transporte terrestre", "Cooperativas", "Salud ocupacional", "Laboratorios farmacéuticos",
                "Mariachis", "Clínicas odontológicas", "Alquiler de lavadoras", "Alquiler de ropa", "Transporte puerta a puerta", "Centros médicos", "Spa", "Hospitales", "Trasteos", "Transporte terrestre de carga", "Transporte especial de pasajeros", "Hogares geriátricos",
                "Comisarías de familia", "Cajas de compensación familiar", "Iglesias cristianas", "Guarderías infantiles", "Servicios de formación"],
    otros: ["Otros"]
  }

  var provincias = document.getElementById('actComercial')
  var pueblos = document.getElementById('categoria')
  var provinciaSeleccionada = provincias.value

  // Se limpian los pueblos
  pueblos.innerHTML = '<option value="">SELECCIONE UNA CATEGORÍA</option>'

  if(provinciaSeleccionada !== ''){
    // Se seleccionan los pueblos y se ordenan
    provinciaSeleccionada = listaPueblos[provinciaSeleccionada]
    provinciaSeleccionada.sort()

    // Insertamos los pueblos
    provinciaSeleccionada.forEach(function(pueblo){
      let opcion = document.createElement('option')
      opcion.value = pueblo
      opcion.text = pueblo
      pueblos.add(opcion)
    });
  }

}

// Iniciar la carga de provincias solo para comprobar que funciona
cargarActividaes();
</script>

<script type="text/javascript">

function CheckOtros (it, box) {
    var vis = (box.checked) ? "block" : "none";
    document.getElementById(it).style.display = vis;
}
function CheckOcultar (it, box) {
    var vis = (box.checked) ? "none" : "block";
    document.getElementById(it).style.display = vis;
}

</script>

@endsection
