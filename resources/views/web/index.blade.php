@extends('layouts.app')
@section('content')
	
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>lista de contactos</h3>
				</div>
				<div class="panel-body">
					{{ Form::open(['route'=>'contactos','method'=>'GET', 'class'=>'form-inline pull-right']) }}
					<div class="form-group">
						{{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre']) }}
					</div>
					<div class="form-group">
						{{ Form::text('last_name',null,['class'=>'form-control','placeholder'=>'Apellido']) }}
					</div>
					<div class="form-group">
						<button class="btn btn-sm btn-primary">Buscar</button>
					</div>
				{{ Form::close() }}
				</div>
			</div>
			
			@foreach($peoples as $people)
				<div class="panel panel-default">
					<div class="panel-heading">
							@if($people->file)
								<img src="{{ $people->file }}" alt="" class="img-responsive">
							@endif
							Nombre: <b>{{ $people->name }} {{ $people->last_name }}</b><br>

							@foreach($people->contacts as $contact)
								@if($contact->phone)
									<b>Telefono:</b> <small> <i>{{ $contact->extension }}</i></small>   {{ $contact->phone }} ({{ $contact->type->description }})<br>
								@endif
							@endforeach
					</div>
					<div class="panel-body">
						@if($people->company->file)
							<img src="{{ $people->company->file }}" alt="" class="img-responsive">
						@endif
						@if($people->company->name)
							<b>Empresa:</b> {{ $people->company->name }}
						@endif
						<br><b>Cargo:</b> {{ $people->cargo }}

						 <br><a href="{{ route('contacto', $people->id) }}" class="btn btn-primary pull-right">Ver detalles</a>
					</div>
				</div>
			@endforeach
			{{ $peoples->render() }}
		</div>	
	</div>

@endsection