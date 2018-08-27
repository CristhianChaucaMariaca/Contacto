@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Lista de Empresas
					<a href="{{ route('companies.create') }}" class="btn btn-sm btn-primary pull-right">Crear</a>
				</div>
				<div class="panel-heading">
					<h3>
						Buscar
						{{ Form::open(['route'=>'companies.index','method'=>'GET','class'=>'form-inline pull-right']) }}
						<div class="form-group">
							{{ Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre']) }}
						</div>
						<div class="form-group">
							<button class="btn btn-sm btn-primary" type="submit">Buscar</button>
						</div>
					{{ Form::close() }}
					</h3>
				</div>
				<div class="panel-body">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th width="10px">
									id
								</th>
								<th>Nombre</th>
								<th>Logotipo</th>
								<th colspan="4">&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($companies as $company)
								<tr>
									<td>{{ $company->id }}</td>
									<td>{{ $company->name }}</td>
									@if($company->file)
										<td><img src="{{ $company->file }}" alt=""></td>
									@endif
									<td>
										<a href="{{ route('companies.show', $company->id) }}" class="btn btn-default btn-sm">Ver</a>
									</td>
									<td>
										<a href="{{ route('companies.edit', $company->id) }}" class="btn btn-default btn-sm">Editar</a>
									</td>
									<td>
										{!! Form::open(['route' => ['companies.destroy', $company->id],'method' => 'DELETE']) !!}
											<button class="btn btn-sm btn-danger">Eliminar</button>
										{!! Form::close() !!}
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
					{{ $companies->render() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection