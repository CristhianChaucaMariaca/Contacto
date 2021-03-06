@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Lista de Tipos de contactos
					<a href="{{ route('types.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
				</div>
				<div class="panel-body">
					<table class="table table-hover table-striped">
						<thead>
							<tr>
								<th width="10px">id</th>
								<th>name</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($types as $type)
							<tr>
								<td>
									{{ $type->id }}
								</td>
								<td>{{ $type->description }}</td>
								<td><a href="{{ route('types.show', $type->id) }}" class="btn btn-sm btn-default">Ver</a></td>
								<td><a href="{{ route('types.edit', $type->id) }}" class="btn btn-sm btn-default">Editar</a></td>
								<td>
									{!! Form::open(['route' => ['types.destroy', $type->id],'method'=>'DELETE']) !!}
										<button class="btn btn-sm btn-danger">Eliminar</button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{$types->render()}}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection