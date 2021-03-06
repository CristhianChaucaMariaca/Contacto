@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Añadir contacto a <strong>{{ $people->name." ".$people->last_name }}</strong>
				</div>
				<div class="panel-body">
					{{ Form::open(['route'=>'contacts.store']) }}
						@section('people_id')
							{{ Form::hidden('people_id', $people->id, null, ['class'=>'form-control']) }}
						@endsection
						@include('admin.contacts.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection