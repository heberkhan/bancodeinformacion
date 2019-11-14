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
                <h3>EDITAR IMPUESTO</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('crudImpuestos.update', $impuesto->id) }}" enctype="multipart/form-data" method="POST" name="form1" id="form1">
                            {!! csrf_field() !!}
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre del Impuesto</label>
                                    <input type="text" placeholder="Nombre del Impuesto" name="name" value="{{ $impuesto->name }}">
                                 </div>
                                 <div class="clearfix"> </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                                <a href="{{route('crudImpuestos.index')}}" class="btn btn-default">Volver</a>
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
