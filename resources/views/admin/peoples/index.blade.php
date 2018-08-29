@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Lista de personas
					<a href="{{ route('peoples.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10">
									ID
								</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($peoples as $people)
								<tr>
									<td>{{ $people->id }}</td>
									<td>{{ $people->name }}</td>
									<td>{{ $people->last_name }}</td>
									<td><a href="{{ route('peoples.show',$people->id) }}" class="btn btn-sm btn-default">Ver</a></td>
									<td><a href="{{ route('peoples.edit',$people->id) }}" class="btn btn-sm btn-default">Editar</a></td>
									<td>
										{{ Form::open(['route'=>['peoples.destroy', $people->id],'method'=>'DELETE']) }}
										<button class="btn btn-sm btn-danger">Eliminar</button>
									{{ Form::close() }}
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{ $peoples->render() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection