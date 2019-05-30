@if(session()->has('mensaje'))
	<div class="alert alert-success" role="alert">
		{{ session()->get('mensaje') }}
	</div>
@endif	