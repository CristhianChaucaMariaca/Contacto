@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Lista de Etiquetas</h3>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10">ID</th>
							<th>name</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tags as $tag)
							<tr>
								<td>{{ $tag->id }}</td>
								<td>{{ $tag->name }}</td>
								<td>
									<a href="{{ route('tag', $tag->slug) }}" class="btn btn-sm btn-primary">Ver</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				<hr>
				{{ $tags->render() }}
			</div>
		</div>
	</div>
</div>
@endsection