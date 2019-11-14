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

<div class="agile-grids">
				<!-- tables -->

				<div class="agile-tables">
					<div class="w3l-table-info">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-xl-6 col-xs-12 col-sm-12">
                        <div class="block">
                            <div class="block-content block-content-full">
                                <form action="{{route('buscadorAdmin')}}" method="get">
                                    <label>Digite el nombre o nit de un comercio para proceder a editar y/o eliminar la información:</label>
                                    <div class="input-group">
                                        <input type="text" min="0" class="form-control" placeholder="Comercio" name="buscar" style="min-height: 50px;">
                                        <div class="input-group-append">
                                          <button type="submit" id="button_282229" class="btn btn-primary"><i class="fa fa-fw fa-search"></i>Buscar</button>
                                       </div>
                                       <div class="clearfix"> </div>
                                   </div>

                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-6 col-xs-12 col-sm-12">
                        <div class="block">
                            <div class="block-content block-content-full">
                                <label>Para agregar un nuevo comercio, haga clic en el botón a continuación:</label>
                                <a href="{{route('comercio.create')}}" class="btn btn-lg btn-primary btn-link-pop mr-1 mb-3" data-toggle="click-ripple" style="width: 100%; height: 50px;"><i class="fa fa-fw fa-upload mr-1"></i> Registrar Nuevo Comercio</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
					</div>
				<!--   <code class="js">
					$('#table').basictable();
				  </code> -->



				</div>
				<!-- //tables -->
			</div>
@endsection
