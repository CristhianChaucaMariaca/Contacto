@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Añadir contacto
				</div>
				<div class="panel-body">
					{!! Form::model($contact,['route'=>['contacts.update',$contact->id],'method'=>'PUT']) !!}
						@section('people_id')
							{{ Form::hidden('people_id', $contact->people_id, null, ['class'=>'form-control']) }}
						@endsection
						@include('admin.contacts.partials.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection