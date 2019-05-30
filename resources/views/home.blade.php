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
<h3>Bienvenido {{ Auth::user()->name }}</h3>

</header>
<div class="agileits-box-body clearfix">
    <h5>¡HAGAMOS MAGIA HOY!</h5>
</div>
</div>
</div>
    <!--//agileinfo-grap-->

<!--four-grids here-->
        <div class="four-grids">

                    <div class="col-md-3 four-grid">
                        <div class="four-agileits">
                            <div class="icon">
                                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Usuarios</h3>
                                <h4>  </h4>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-3 four-grid">
                        <div class="four-agileinfo">
                            <div class="icon">
                                <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Comercios</h3>
                                <h4></h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 four-grid">
                        <div class="four-w3ls">
                            <div class="icon">
                                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Mensajes</h3>
                                <h4></h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 four-grid">
                        <div class="four-wthree">
                            <div class="icon">
                                <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Reportes</h3>
                                <h4></h4>

                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
<!--//four-grids here-->



          <div class="clearfix"></div>
      </div>
@endsection
