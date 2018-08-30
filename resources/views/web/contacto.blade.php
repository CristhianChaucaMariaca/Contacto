@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					@if($people->file)
						<img src="{{ $people->file }}" alt="" class="img-responsive img-circle img-thumbnail">
					@endif
					<h4>{{ $people->name }} {{ $people->last_name }}</h4>
				</div>
				<div class="panel-body">
					@foreach($people->contacts as $contact)
						<b>Tipo: </b> {{ $contact->type->description }} <br>
						<b>Telefono: </b> <i><small>{{ $contact->extension }}</small></i> - {{ $contact->phone }}<br>
						<b>E-mail: </b> {{ $contact->email }}
						<hr>
					@endforeach
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>{{ $people->company->name }}
					@if($people->company->file)
						<img src="{{ $people->company->file }}" alt="" class="img-responsive img-circle img-thumbnail pull-right" width="50" height="50">
					@endif
					</h4>
				</div>
				<div class="panel-body">
					<b>Pagina Web: </b> {{ $people->company->web }} <br>
					<b>Dirección: </b>	{{ $people->company->direction }}
					<hr>
					@foreach($people->tags as $tag)
						<a href="{{ route('tag',$tag->slug) }}" class="btn btn-info btn-sm">{{ $tag->name }}</a> 
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection