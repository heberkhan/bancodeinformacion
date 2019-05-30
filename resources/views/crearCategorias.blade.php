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
                <h3>CREAR NUEVA ACTIVIDAD COMERCIAL</h3>
                <!--grid-->
                <div class="validation-system">

                    <div class="validation-form">
                        <!---->

                        <form action="{{ route('crearCategoria') }}">
                            <div class="vali-form">
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Código CIIU</label>
                                    <input type="text" placeholder="Código CIIU" required="" name="ciiu">
                                </div>
                                <div class="col-md-6 form-group1">
                                    <label class="control-label">Nombre de la Actividad Comercial</label>
                                    <input type="text" placeholder="Nombre de la Actividad Comercial" required="" name="name">
                                </div>

                            </div>




                                <div class="clearfix"> </div>
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                                <button type="reset" class="btn btn-default">Cancelar</button>
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

@endsection
