@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Lista de Empresas
						{{ Form::open(['route'=>'companies','method'=>'GET','class'=>'form-inline pull-right']) }}
							<div class="form-group">
								{{ Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre']) }}
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
								<th width="10">ID</th>
								<th>Logo</th>
								<th>Empresa</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							@foreach($companies as $company)
								<tr>
									<td>
										{{ $company->id }}
									</td>
									<td>
										{{ $company->file }}
									</td>
									<td>
										{{ $company->name }}
									</td>
									<td>
										<a href="{{ route('contact_company', $company->id) }}" class="btn btn-sm btn-primary">Detalle</a>
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