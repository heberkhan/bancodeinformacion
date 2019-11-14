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
                <h3>REGISTRAR DATOS TRIBUTARIOS</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('impuestos.store') }}" enctype="multipart/form-data" method="POST" name="form1" id="form1">
                            {!! csrf_field() !!}

                            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                            <input type="hidden" name="comercio_id" value="{{$comercio->id}}">


                            <label>ESTADO DEL CONTRIBUYENTE</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Impuesto al cual se encuentra al día<span class="text-danger">*</span></label>
                                    <select name="impuesto_id1" for="impuesto_id1">
                                        <option selected="" value="">SELECCIONE UNA OPCIÓN </option>
                                        @foreach($impuestos as $impuesto)
                                        <option value="{{$impuesto->id}}">{{$impuesto->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Se Encuentra Inscrito En El Registro Mercantil De Cámara De Comercio?<span class="text-danger">*</span></label>
                                    <select name="camaraComercio" for="camaraComercio" required="">
                                        <option selected="" value=""> </option>
                                        <option for="camaraComercio" value="Si" >Si </option>
                                        <option for="camaraComercio" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Se encuentra inscrito en el Registro Tributario de Industria y Comercio?<span class="text-danger">*</span></label>
                                    <select name="rtiyc" for="rtiyc" required="">
                                        <option selected="" value=""> </option>
                                        <option for="rtiyc" value="Si" >Si </option>
                                        <option for="rtiyc" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Certificado de Uso de Suelos?<span class="text-danger">*</span></label>
                                    <select name="usoSuelos" for="usoSuelos" required="">
                                        <option selected="" value=""> </option>
                                        <option for="usoSuelos" value="Si" >Si </option>
                                        <option for="usoSuelos" value="No" >No </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Declaración Impuesto Industria y Comercio y complementarios<span class="text-danger">*</span></label>
                                    <select name="diiyc" for="diiyc" required="">
                                        <option selected="" value=""> </option>
                                        <option for="diiyc" value="Si" >Si </option>
                                        <option for="diiyc" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Se Encuentra Inscrito En El Registro De Sayco Y Acinpro?<span class="text-danger">*</span></label>
                                    <select name="saycoAcinpro" for="saycoAcinpro" required="">
                                        <option selected="" value=""> </option>
                                        <option for="saycoAcinpro" value="Si" >Si </option>
                                        <option for="saycoAcinpro" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Cuenta Con Revisión De Sanidad Vigente?<span class="text-danger">*</span></label>
                                    <select name="sanidad" for="sanidad" required="">
                                        <option selected="" value=""> </option>
                                        <option for="sanidad" value="Si" >Si </option>
                                        <option for="sanidad" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Cuenta Con Certificación De Manejo De Alimentos Vigente?<span class="text-danger">*</span></label>
                                    <select name="manejoAlimentos" for="manejoAlimentos" required="">
                                        <option selected="" value=""> </option>
                                        <option for="manejoAlimentos" value="Si" >Si </option>
                                        <option for="manejoAlimentos" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Cuenta Con Certificación De Seguridad De Bomberos?<span class="text-danger">*</span></label>
                                    <select name="bomberos" for="bomberos" required="">
                                        <option selected="" value=""> </option>
                                        <option for="bomberos" value="Si" >Si </option>
                                        <option for="bomberos" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Lleva Control Mediante Libro De Diario?<span class="text-danger">*</span></label>
                                    <select name="libroDiario" for="libroDiario" required="">
                                        <option selected="" value=""> </option>
                                        <option for="libroDiario" value="Si" >Si </option>
                                        <option for="libroDiario" value="No" >No </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Contribuye Con El Impuesto De Industria Y Comercio Municipal?<span class="text-danger">*</span></label>
                                    <select name="ciyc" for="ciyc" required="">
                                        <option selected="" value=""> </option>
                                        <option for="ciyc" value="Si" >Si </option>
                                        <option for="ciyc" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>

                                <div class="clearfix"> </div>
                            </div>


                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="{{route('comercio.show', $comercio->id)}}" class="btn btn-default">Volver</a>
                            </div>
                            <div class="clearfix"> </div>
                        </form>


                    </div>

                </div>

            </header>
            <div class="agileits-box-body clearfix">
                <div id="hero-area"></div>
            </div>
        </div>
    </div>
    <!--//agileinfo-grap-->

    <script src="js/app.js"></script>


@endsection
