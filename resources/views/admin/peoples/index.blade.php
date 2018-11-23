@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Lista de personas
					<a href="{{ route('peoples.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10">
									ID
								</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Estado</th>
								<th colspan="4">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($peoples as $people)
								<tr>
									<td>{{ $people->id }}</td>
									<td>{{ $people->name }}</td>
									<td>{{ $people->last_name }}</td>
									<td>
										@if($people->status == 'PUBLIC')
											<span class="icon-lock-open-filled"></span>
										@elseif($people->status == 'PRIVATE')
											<span class="icon-lock-filled" style="color:red;"></span>
										@endif
									</td>
									<td><a href="{{ route('addcontact',$people) }}" class="btn btn-sm btn-primary"><span class="icon-user-add"></span></a></td>
									<td><a href="{{ route('peoples.show',$people->id) }}" class="btn btn-sm btn-default"><span class="icon-vcard"></span></a></td>
									<td><a href="{{ route('peoples.edit',$people->id) }}" class="btn btn-sm btn-default"><span class="icon-pencil"></span></a></td>
									<td>
										{{ Form::open(['route'=>['peoples.destroy', $people->id],'method'=>'DELETE']) }}
										<button class="btn btn-sm btn-danger"><span class="icon-trash"></span></button>
									{{ Form::close() }}
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{ $peoples->render() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection