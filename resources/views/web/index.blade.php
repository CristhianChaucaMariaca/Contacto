@extends('layouts.app')
@section('content')
	
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h1>lista de contactos</h1>
			@foreach($peoples as $people)
				<div class="panel panel-default">
					<div class="panel-heading">
						Nombre: <b>{{ $people->name }} {{ $people->last_name }}</b> Cargo: {{ $people->cargo }}
					</div>
					<div class="panel-body">
						@if($people->file)
							<img src="{{ $people->file }}" alt="" class="img-responsive">
						@endif
					</div>
				</div>
			@endforeach
			{{ $peoples->render() }}
		</div>		
	</div>

@endsection