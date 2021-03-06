@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel pane-default">
				<div class="panel-body">
					Busqueda
					{{ Form::open(['route'=>'tags.index','method'=>'GET','class'=>'form-inline pull-right']) }}
						<div class="form-group">
							{{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre']) }}
						</div>
						<button class="btn btn-sm btn-primary" type="submit">Buscar</button>
					{{ Form::close() }}
				</div>
			</div>
			<div class="panel panel-default">
				
				<div class="panel-heading">
					Lista de Etiquetas
					<a href="{{ route('tags.create') }}" class="btn btn-sm btn-primary pull-right"> Crear</a>
				</div>
				
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">id</th>
								<th>Nombre</th>
								<th colspan="3">
									&nbsp;
								</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tags as $tag)
							<tr>
								<td>
									{{ $tag->id }}
								</td>
								<td>
									{{ $tag->name }}		
								</td>
								<td>
									<a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-default">Ver</a>
								</td>
								<td>
									<a href="{{ route('tags.edit',$tag->id) }}" class="btn btn-sm btn-default">Editar</a>
								</td>
								<td>
									{!! Form::open(['route'=>['tags.destroy',$tag->id], 'method'=>'DELETE']) !!}
										<button class="btn btn-sm btn-danger">Eliminar</button>
									{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $tags->render() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection