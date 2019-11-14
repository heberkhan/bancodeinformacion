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
                <h3>INGRESAR DATOS DE REDES SOCIALES E INTERNET</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('redes.store') }}" enctype="multipart/form-data" method="POST" name="form1" id="form1">
                            {!! csrf_field() !!}

                            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">
                            <input type="hidden" name="comercio_id" value="{{$comercio->id}}">

                            <label>REDES SOCIALES E INTERNET</label>
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Facebook</label>
                                    <input type="text" placeholder="Facebook"  name="facebook" value="{{ old('facebook') }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Twitter</label>
                                    <input type="text" placeholder="Twitter" name="twitter" value="{{ old('twitter') }}">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Instagram</label>
                                    <input type="text" placeholder="Instagram" name="instagram" value="{{ old('instagram') }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Website</label>
                                    <input type="text" placeholder="URL" name="url" value="{{ old('url') }}">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="vali-form vali-form1">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Latitud<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Latitud" name="lat" required="" value="{{ old('lat') }}">
                                </div>
                                <div class="col-md-6 form-group1 form-last">
                                    <label class="control-label">Longitud<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Longitud" name="long" required="" value="{{ old('long') }}">
                                </div>

                                <div class="clearfix"> </div>
                            </div>

                            


                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="{{route('comercio.show', $comercio->id)}}" class="btn btn-default">Volver</a>
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
