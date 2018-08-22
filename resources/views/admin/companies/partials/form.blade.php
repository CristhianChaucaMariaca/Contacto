<div class="form-group">
	{!! Form::label('name', 'Nombre de la empresa') !!}
	{!! Form::text('name',null,['class'=>'form-control', 'id'=>'name']) !!}
</div>
<div class="form-group">
	{!! Form::label('web', 'Pagina web de la empresa') !!}
	{!! Form::text('web',null, ['class'=>'form-control','id'=>'web']) !!}
</div>
<div class="form-group">
	{!! Form::label('file','Logotipo de la empresa') !!}
	{!! Form::text('file',null,['class'=>'form-control','id'=>'file' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('direction', 'Direccion de la empresa') !!}
	{!! Form::text('direction',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Guardar',['class'=>'form-control btn btn-sm btn-primary']) !!}
</div>