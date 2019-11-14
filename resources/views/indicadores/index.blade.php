@extends('layout.temaAdmin')
@section('content')

<!--four-grids here-->
        <div class="four-grids">

                    <div class="col-md-3 four-grid">
                        <div class="four-agileits">
                            <div class="icon">
                                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Al día en Impuestos</h3>
                                <h4> </h4>

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
                                <h4> </h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 four-grid">
                        <div class="four-w3ls">
                            <div class="icon">
                                <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="four-text">
                                <h3>Impuestos</h3>
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
                                <h3>Requisitos</h3>
                                <h4></h4>

                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
<!--//four-grids here-->
<!-- SELECTOR DE IMPUESTOS -->

                            <div class="col-sm-4 wthree-crd">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="widget widget-report-table">
                                            <header class="widget-header m-b-15">
                                            </header>

                                            <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                                                <div class="col-md-6 w3layouts-aug">
                                                    <h2>Impuestos</h2>
                                                    <p>Indicadores Por Zonas</p>
                                                </div>

                                            </div>

                                            <div class="widget-body p-15">
                                              <form class="" action="{{route('indicadores.impuesto')}}" method="post" target="_blank">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                  <label for="">Impuesto</label>
                                                  <select class="form-control1" name="impuesto" required>
                                                    <option value="" selected>SELECCIONE UNA OPCIÓN</option>
                                                    @foreach($impuestos as $impuesto)
                                                    <option value="{{$impuesto->name}}">{{$impuesto->name}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="form-group">
                                                  <label for="">Sector</label>
                                                  <select class="form-control1" name="barrio">
                                                    <option value="" selected>SELECCIONE UNA OPCIÓN</option>
                                                    @foreach($barrios as $barrio)
                                                    <option value="{{$barrio->id}}">{{$barrio->name}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Ver Reporte</button>

                                              </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
<!-- FIN SELECTOR IMPUESTOS -->

<!-- SELECTOR DE REQUISITOS -->
<div class="col-sm-4 wthree-crd">
    <div class="card">
        <div class="card-body">
            <div class="widget widget-report-table">
                <header class="widget-header m-b-15">
                </header>

                <div class="row m-0 md-bg-grey-100 p-l-20 p-r-20">
                    <div class="col-md-6 w3layouts-aug">
                        <h2>Requisitos</h2>
                        <p>Indicadores Por Zonas</p>
                    </div>

                </div>

                <div class="widget-body p-15">
                  <form class="" action="{{route('indicadores.requisito')}}" method="post" target="_blank">
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label for="">Requisito</label>
                      <select class="form-control1" name="requisito" required>
                        <option value="" selected>SELECCIONE UNA OPCIÓN</option>
                        @foreach($requisitos as $requisito)
                        <option value="{{$requisito->name}}">{{$requisito->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Sector</label>
                      <select class="form-control1" name="barrio" required>
                        <option value="" selected>SELECCIONE UNA OPCIÓN</option>
                        @foreach($barrios as $barrio)
                        <option value="{{$barrio->id}}">{{$barrio->name}}</option>
                        @endforeach
                      </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Ver Reporte</button>

                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN SELECTOR REQUISITOS -->
@endsection
