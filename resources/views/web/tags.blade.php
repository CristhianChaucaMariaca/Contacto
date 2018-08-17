@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3>Lista de Etiquetas</h3>
			</div>
			<div class="panel-body">
				@foreach($tags as $tag)
					<a href=" {{ route('tag', $tag->slug) }} " class="btn btn-info btn-sm">{{ $tag->name }}</a>
				@endforeach
				<hr>
				{{ $tags->render() }}
			</div>
		</div>
	</div>
</div>
@endsection