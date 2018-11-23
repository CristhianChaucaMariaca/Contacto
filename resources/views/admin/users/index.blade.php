@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Lista de Usuarios
					<a href="{{ route('users.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10">id</th>
								<th>name</th>
								<th colspan="3">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($users as $user)
								<tr>
									<td>{{ $user->id }}</td>
									<td>{{ $user->name }}</td>
									<td><a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-primary">Ver</a></td>
									<td><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Editar</a></td>
									<td>
										{{ Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE']) }}
											<button class="btn btn-sm btn-danger">
												Eliminar
											</button>
										{{ Form::close() }}
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{ $users->render() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection