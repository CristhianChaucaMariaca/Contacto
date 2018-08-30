@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<h3>{{ $company->name }}</h3>
					@if($company->file)
						<img src="{{ $company->file }}" class="img-responsive img-circle img-thumbnail" alt="">
					@endif
				</div>
				<div class="panel-body">
					<p><b>Pagina web: </b>{{ $company->web }}</p>
					<p><b>Direccion: </b>{{ $company->direction }}</p>
					<hr>
					<table class="table table-striped">
						<tr>
							<td>
								<a href="{{ route('companies.edit', $company->id) }}" class="btn btn-sm btn-default">Editar</a>
							</td>
							<td>
								{!! Form::open(['route'=>['companies.destroy', $company->id],'method' => 'DELETE']) !!}
						<button class="btn btn-sm btn-danger">Eliminar</button>
					{!! Form::close() !!}
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection