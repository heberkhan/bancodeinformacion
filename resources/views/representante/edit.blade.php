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
                <h3>ACTUALIZAR DATOS DEL REPRESENTANTE LEGAL Y/O PROPIETARIO</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('representante.update', $representante->id) }}" enctype="multipart/form-data" method="get" name="form1" id="form1">
                            {!! csrf_field() !!}

                            <label>DATOS BÁSICOS DEL REPRESENTANTE LEGAL</label>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Representante Legal<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Nombre del Representante Legal" required="" name="nombreRepresentante" value="{{ $representante->nombreRepresentante }}">
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Cédula de Ciudadania<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Cédula de Ciudadania" required="" name="ccRep" value="{{ $representante->ccRep }}">
                                 </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Notificaciones<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Dirección del Notificaciones" name="dirNotificacionRep" value="{{ $representante->dirNotificacionRep }}">
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">Nivel de Estudios<span class="text-danger">*</span></label>
                                    <select name="nivelEstudioRep" for="nivelEstudio" >
                                        <option selected="" value="{{ $representante->nivelEstudioRep }}">{{ $representante->nivelEstudioRep }} </option>
                                        <option for="nivelEstudio" value="Primaria" >Primaria </option>
                                        <option for="nivelEstudio" value="Secundaria" >Secundaria </option>
                                        <option for="nivelEstudio" value="Técnico" >Técnico </option>
                                        <option for="nivelEstudio" value="Tecnólogo" >Tecnólogo </option>
                                        <option for="nivelEstudio" value="Profesional" >Profesional </option>
                                        <option for="nivelEstudio" value="Especialización" >Especialización </option>
                                        <option for="nivelEstudio" value="Maestría" >Maestría </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-4 form-group1">
                                    <label class="control-label">Teléfono fijo</label>
                                    <input type="text" placeholder="Teléfono fijo"  name="telRepresentante" value="{{ $representante->telRepresentante }}">
                                 </div>


                                <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Celular</label>
                                    <input type="text" placeholder="Celular"  name="celRepresentante" value="{{ $representante->celRepresentante }}">
                                 </div>
                                 <div class="col-md-4 form-group1 form-last">
                                    <label class="control-label">Whatsapp</label>
                                    <input type="text" placeholder="Whatsapp"  name="waRepresentante" value="{{ $representante->waRepresentante }}">
                                 </div>
                                 <div class="clearfix"> </div>
                            </div>
                            <label>DATOS BÁSICOS DEL PROPIETARIO (si es el mismo representante omita estos datos)</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Propietario</label>
                                    <input type="text" placeholder="Nombre del Propietario" name="nombrePropietario" value="{{ $representante->nombrePropietario }}" >
                                 </div>


                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Cédula de Ciudadania</label>
                                    <input type="text" placeholder="Cédula de Ciudadania"  name="ccPropietario" value="{{ $representante->ccPropietario }}" >
                                 </div>

                            </div>

                            <div class="vali-form">
                                <div class="col-md-6 form-group1 ">
                                    <label class="control-label">Dirección de Notificaciones</label>
                                    <input type="text" placeholder="Dirección"  name="dirPropietario" value="{{ $representante->dirPropietario }}" >
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Teléfono</label>
                                    <input type="text" placeholder="Teléfono"  name="telPropietario" value="{{ $representante->telPropietario }}" >
                                </div>
                                <div class="clearfix"> </div>
                            </div>



                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="{{route('comercio.show', $representante->comercio_id)}}" class="btn btn-default">Volver</a>
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
