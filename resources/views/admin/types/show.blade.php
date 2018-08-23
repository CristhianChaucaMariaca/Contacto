@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Detalle de Tipo de contacto
				</div>
				<div class="panel-body">
					<p><strong>Tipo:</strong> {{ $type->description }}</p>
				</div>
				<hr>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>
								<a href="{{ route('types.edit', $type->id) }}" class="btn btn-sm btn-default">Editar</a>
							</td>
							<td>
								{!! Form::open(['route' => ['types.destroy',$type->id], 'method' => 'DELETE']) !!}
					<button class="btn btn-sm btn-danger">Eliminar</button>
				{!! Form::close() !!}
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection