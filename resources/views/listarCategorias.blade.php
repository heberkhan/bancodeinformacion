@extends('layout.temaAdmin')
@section('content')
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Listado de Actividades</h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>Código CIIU</th>
							<th>Nombre Actividad</th>
							<th>Actualizar</th>
							<th>Borrar</th>
							
						  </tr>
						</thead>
						<tbody>
						  @foreach($categorias as $categoria)
						  <tr>
						  	
							<td>{{$categoria->codigoCiiu}}</td>
							<td>{{$categoria->nombreActividad}}</td>
							<td>BTN ACTUALIZAR</td>
							<td>BTN BORRAR</td>
							
						  </tr>
						 @endforeach
						</tbody>
					  </table>
					</div>
				<!--   <code class="js">
					$('#table').basictable();
				  </code> -->
		
				  

				</div>
				<!-- //tables -->
			</div>
@endsection
