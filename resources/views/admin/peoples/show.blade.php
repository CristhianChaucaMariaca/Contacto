@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<span class="pull-right">
						@if($people->status == 'PUBLIC')
							<span class="icon-lock-open-filled"></span>
						@elseif($people->status == 'PRIVATE')
							<span class="icon-lock-filled"></span>
						@endif
					</span>
					<h3>{{ $people->name }} {{ $people->last_name }}</h3>
					@if($people->file)
						<img src="{{ $people->file }}" class="img-responsive img-circle img-thumbnail" alt="">
					@endif
				</div>
				<div class="panel-body">
					<p><b>Cargo: </b>{{ $people->cargo }}</p>

					@foreach($people->contacts as $contact)
						<p><strong>{{ $contact->type->description }}</strong></p>
						<p><strong>Telefono: </strong> {{ $contact->extension }} - {{ $contact->phone }} </p>
						<p><strong><span class="icon-mail"></span></strong> {{ $contact->email }} </p>
						<table class="table table-striped">
							<tbody>
								<tr>
									<td>
										<a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-sm btn-block btn-primary"><span class="icon-pencil"></span></a>				
									</td>
									<td>
										{{ Form::open(['route'=>['contacts.destroy',$contact->id],'method'=>'DELETE']) }}
							<button class="btn btn-sm btn-danger btn-block"><span class="icon-trash"></span></button>
						{{ Form::close() }} 				
									</td>
								</tr>
							</tbody>
						</table>
						<hr>
					@endforeach
					<a href="{{ route('addcontact', $people) }}" class="btn btn-block btn-primary"><span class="icon-user-add"></span></a>
				</div>
				<div class="panel-footer">
					<h5><span class="icon-tags"></span></h5>
					@foreach($people->tags as $tag)
						<a href="{{ route('tags_personas',$tag->slug) }}" class="btn btn-sm btn-info">{{ $tag->name }}</a>
					@endforeach
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<p>
						<span class="icon-building-filled"></span>{{ $people->company->name }}
						<img src="{{ $people->company->file }}" alt="" class="img-responsive img-circle pull-right" width="30" height="30">
					</p>
				</div>
				<div class="panel-body">
					<p><strong><span class="icon-location"></span> </strong>  {{ $people->company->direction }}</p>
					<p><strong>Pagina web: </strong> {{ $people->company->web }}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection