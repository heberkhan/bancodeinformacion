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
                        <h2>Listado de Barrios</h2>
                        <div class="form-group">
                        	<!-- BTN CREAR -->
                            <div class="col-md-4 form-group1">
                            <a href="{{ route('barrios.create') }}" class="btn btn-primary">Crear</a>
                            </div>
                            <!-- FIN BTN CREAR -->
                            <!-- BUSCADOR -->
                            <div class="col-md-6 form-group1 form-last">

	                                <form method="GET" action="{{route('barrios.buscar')}}">

	                                    <input type="text" placeholder="Buscar..." name="buscar">
	                                </form>

                        	</div>
                        	<div class="clearfix"></div>
                            <!-- FIN BUSCADOR -->
                      </div>

					    <table id="table">
						<thead>
						  <tr>
                            <th>id</th>
							<th>Nombre</th>
							<th>Zona</th>
							<th>UPZ</th>
							<th>Editar</th>
							<th>Borrar</th>

						  </tr>
						</thead>
						<tbody>
						  @foreach($barrios as $barrio)
						  <tr>
						  	<td>{{$barrio->id}}</td>
							<td>{{$barrio->name}}</td>
							<td>{{$barrio->zona}}</td>
							<td>{{ $barrio->upz }}</td>

							<td><form action="{{ route('barrios.edit')}}">
									<input type="hidden" name="id" value="{{$barrio->id}}">
								 	<button type="submit" class="btn btn-primary">Editar</button>
								</form>
							</td>
							<td>
								<form action="{{ route('barrios.destroy') }}">
									<input type="hidden" name="id" value="{{$barrio->id}}">
								 	<button type="submit" class="btn btn-default">Borrar</button>
								</form>
							</td>

						  </tr>
						 @endforeach
						</tbody>
					  </table>
					</div>
				{!! $barrios->render() !!}



				</div>
				<!-- //tables -->
			</div>
@endsection
