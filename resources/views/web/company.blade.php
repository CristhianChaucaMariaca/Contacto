@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>{{ $company->name }}</h4>
					@if($company->file)
						<img src="{{ $company->file }}" alt="" class="img-responsive">
					@endif
				</div>
				<div class="panel-body">
					<p><strong>Dirección</strong> {{ $company->direction }}</p>
					<p><strong>Pagina Web: </strong> {{ $company->web }}</p>
				</div>
			</div>
			@foreach($company->peoples as $people)
			<div class="panel panel-default">
				<div class="panel-heading">
					<p><strong>Nombre: </strong> {{ $people->name }} {{ $people->last_name }}</p>
					<p><strong>Cargo: </strong> {{ $people->cargo }}</p>
				</div>
				<div class="panel-body">
					@foreach($people->contacts as $contact)
						<h4><strong>{{ $contact->type->description }}</strong></h3>
						<p><strong>Telefono: </strong> {{ $contact->phone }}</p><br>
						<p><strong>Email: </strong> {{ $contact->email }}</p><br>
					@endforeach
				</div>
			</div>
			@endforeach
		</div>
	</div>
@endsection