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
                <h3>CREAR NUEVO REQUISITO</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('requisitos.store') }}" enctype="multipart/form-data" method="POST" name="form1" id="form1">
                            {!! csrf_field() !!}
                            <input type="hidden" name="user_id" value="{{Auth()->user()->id}}">

                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Requisito<span class="text-danger">*</span></label>
                                    <input type="text" placeholder="Nombre del Requisito" name="name" value="{{ old('name') }}">
                                 </div>
                                 <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <a href="{{route('requisitos.index')}}" class="btn btn-default">Volver</a>
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
