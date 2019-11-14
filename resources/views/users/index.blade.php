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
                        <h2>Listado de Usuarios</h2>
	                       	<div class="form-group">
	                        	<!-- BTN CREAR -->
	                            <div class="col-md-4 form-group1">
	                            <a href="{{ route('users.create') }}" class="btn btn-primary">Crear</a>
	                            </div>
	                            <!-- FIN BTN CREAR -->
	                            <!-- BUSCADOR -->
	                            <div class="col-md-6 form-group1 form-last">

		                                <form method="GET" action="{{route('users.buscar')}}">

		                                    <input type="text" placeholder="Buscar por email" name="buscar">
		                                </form>

	                        	</div>
	                        	<div class="clearfix"></div>
	                            <!-- FIN BUSCADOR -->
	                      	</div>

                      </div>

					    <table id="table">
						<thead>
						  <tr>
                            <th>id</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Editar</th>
							<th>Borrar</th>

						  </tr>
						</thead>
						<tbody>
						  @foreach($users as $user)
              @if($user->id != '1')
						  <tr>
						  	<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>

							<td><form action="{{ route('users.edit')}}">
									<input type="hidden" name="id" value="{{$user->id}}">
								 	<button type="submit" class="btn btn-primary">Editar</button>
								</form>
							</td>
							<td>
								<form action="{{ route('users.destroy') }}">
									<input type="hidden" name="id" value="{{$user->id}}">
								 	<button type="submit" class="btn btn-default">Borrar</button>
								</form>
							</td>

						  </tr>
              @endif
						 @endforeach
						</tbody>
					  </table>
					</div>
				{!! $users->render() !!}



				</div>
				<!-- //tables -->
			</div>
@endsection
