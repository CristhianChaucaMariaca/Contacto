@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Editar Empresa
				</div>
				<div class="panel-body">
					{{ Form::model($company,['route' => ['companies.update', $company->id],'method'=>'PUT']) }}
						@include('admin.companies.partials.form')
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection