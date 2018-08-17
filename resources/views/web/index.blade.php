@extends('layouts.app')
@section('content')
	
	<div class="container">
		<div class="col-md-8">
			<h3>lista de contactos</h3>
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
		<div class="col-md-4">
			<h3>Etiquetas</h3>
			
		</div>	
	</div>

@endsection