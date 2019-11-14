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
                <h3>ACTUALIZAR DATOS TRIBUTARIOS</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('impuestos.update', $comercio->id) }}" enctype="multipart/form-data" method="GET" name="form1" id="form1">
                            {!! csrf_field() !!}

                            <label>ESTADO DEL CONTRIBUYENTE</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Se encuentra inscrito en el registro único tributario RUT?</label>
                                    <select name="rut" for="rut" required="">
                                        <option selected="" value="{{$comercio->rut}}">{{$comercio->rut}} </option>
                                        <option for="rut" value="Si" >Si </option>
                                        <option for="rut" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Se Encuentra Inscrito En El Registro Mercantil De Cámara De Comercio?</label>
                                    <select name="camaraComercio" for="camaraComercio" required="">
                                        <option selected="" value="{{$comercio->camaraComercio}}">{{$comercio->camaraComercio}} </option>
                                        <option for="camaraComercio" value="Si" >Si </option>
                                        <option for="camaraComercio" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Se encuentra inscrito en el Registro Tributario de Industria y Comercio?</label>
                                    <select name="rtiyc" for="rtiyc" required="">
                                        <option selected="" value="{{$comercio->rtiyc}}">{{$comercio->rtiyc}} </option>
                                        <option for="rtiyc" value="Si" >Si </option>
                                        <option for="rtiyc" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Certificado de Uso de Suelos?</label>
                                    <select name="usoSuelos" for="usoSuelos" required="">
                                        <option selected="" value="{{$comercio->usoSuelos}}">{{$comercio->usoSuelos}} </option>
                                        <option for="usoSuelos" value="Si" >Si </option>
                                        <option for="usoSuelos" value="No" >No </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">Declaración Impuesto Industria y Comercio y complementarios</label>
                                    <select name="diiyc" for="diiyc" required="">
                                        <option selected="" value="{{$comercio->diiyc}}">{{$comercio->diiyc}} </option>
                                        <option for="diiyc" value="Si" >Si </option>
                                        <option for="diiyc" value="No" >No </option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Se Encuentra Inscrito En El Registro De Sayco Y Acinpro?</label>
                                    <select name="saycoAcinpro" for="saycoAcinpro" required="">
                                        <option selected="" value="{{$comercio->saycoAcinpro}}">{{$comercio->saycoAcinpro}} </option>
                                        <option for="saycoAcinpro" value="Si" >Si </option>
                                        <option for="saycoAcinpro" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Cuenta Con Revisión De Sanidad Vigente?</label>
                                    <select name="sanidad" for="sanidad" required="">
                                        <option selected="" value="{{$comercio->sanidad}}">{{$comercio->sanidad}} </option>
                                        <option for="sanidad" value="Si" >Si </option>
                                        <option for="sanidad" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Cuenta Con Certificación De Manejo De Alimentos Vigente?</label>
                                    <select name="manejoAlimentos" for="manejoAlimentos" required="">
                                        <option selected="" value="{{$comercio->manejoAlimentos}}">{{$comercio->manejoAlimentos}} </option>
                                        <option for="manejoAlimentos" value="Si" >Si </option>
                                        <option for="manejoAlimentos" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Cuenta Con Certificación De Seguridad De Bomberos?</label>
                                    <select name="bomberos" for="bomberos" required="">
                                        <option selected="" value="{{$comercio->bomberos}}">{{$comercio->bomberos}} </option>
                                        <option for="bomberos" value="Si" >Si </option>
                                        <option for="bomberos" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group2 form-last">
                                    <label class="control-label">¿Lleva Control Mediante Libro De Diario?</label>
                                    <select name="libroDiario" for="libroDiario" required="">
                                        <option selected="" value="{{$comercio->libroDiario}}">{{$comercio->libroDiario}} </option>
                                        <option for="libroDiario" value="Si" >Si </option>
                                        <option for="libroDiario" value="No" >No </option>
                                    </select>
                                </div>

                            </div>
                            <div class="vali-form">
                                <div class="col-md-6 form-group2">
                                    <label class="control-label">¿Contribuye Con El Impuesto De Industria Y Comercio Municipal?</label>
                                    <select name="ciyc" for="ciyc" required="">
                                        <option selected="" value="{{$comercio->ciyc}}">{{$comercio->ciyc}} </option>
                                        <option for="ciyc" value="Si" >Si </option>
                                        <option for="ciyc" value="No" >No </option>
                                        <option for="camaraComercio" value="NA" >No Aplica</option>
                                    </select>
                                </div>

                                <div class="clearfix"> </div>
                            </div>


                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{route('comercio.show', $comercio->comercio_id)}}" class="btn btn-default">Volver</a>
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
