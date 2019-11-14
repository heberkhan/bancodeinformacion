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
                      <div class="panel-heading">
                        <h2>Listado de Requisitos</h2>
	                       	<div class="form-group">
	                        	<!-- BTN CREAR -->
	                            <div class="col-md-4 form-group1">
	                            <a href="{{ route('requisitos.create') }}" class="btn btn-primary">Crear</a>
	                            </div>
	                            <!-- FIN BTN CREAR -->
	                            <!-- BUSCADOR -->
	                            <!-- <div class="col-md-6 form-group1 form-last">

		                                <form method="GET" action="{{route('users.buscar')}}">

		                                    <input type="text" placeholder="Buscar por email" name="buscar">
		                                </form>

	                        	</div> -->
	                        	<div class="clearfix"></div>
	                            <!-- FIN BUSCADOR -->
	                      	</div>

                      </div>

					    <table id="table">
						<thead>
						  <tr>
              <th>id</th>
							<th>Nombre</th>
							<th>Editar</th>
							<th>Borrar</th>

						  </tr>
						</thead>
						<tbody>
						  @foreach($requisitos as $requisito)

						  <tr>
						  <td>{{$requisito->id}}</td>
							<td>{{$requisito->name}}</td>

							<td>
                <a href="{{route('requisitos.edit', $requisito->id)}}" class="btn btn-primary">Editar</a>

							</td>
							<td>
                <a href="{{route('requisitos.destroy', $requisito->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar?')">Eliminar</a>

							</td>

						  </tr>

						 @endforeach
						</tbody>
					  </table>
					</div>
				{!! $requisitos->render() !!}



				</div>
				<!-- //tables -->
			</div>
@endsection
