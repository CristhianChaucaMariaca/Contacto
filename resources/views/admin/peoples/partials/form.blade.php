{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('name','Nombre de la persona') }}
	{{ Form::text('name',null,['class'=>'form-control', 'id'=>'name']) }}
</div>
<div class="form-group">
	{{ Form::label('last_name','Apellido de la persona') }}
	{{ Form::text('last_name',null,['class'=>'form-control', 'id'=>'last_name']) }}
</div>
<div class="form-group">
	{{ Form::label('file','Fotografia') }}
	{{ Form::file('file') }}
</div>
<div class="form-group">
	{{ Form::label('cargo','Cargo de la persona') }}
	{{ Form::text('cargo',null,['class'=>'form-control', 'id'=>'cargo']) }}
</div>
<div class="form-group">
	{{ Form::label('company_id', 'Empresas') }}
	{{ Form::select('company_id',$companies,null,['class'=>'form-control']) }}
</div>
<div class="form-group">
	{{ Form::label('tags', 'Etiquetas') }}
	<div>
		@foreach($tags as $tag)
			<label>
				{{ Form::checkbox('tags[]',$tag->id) }} {{ $tag->name }}
			</label>
		@endforeach
	</div>
</div>
<div class="form-group">
	{{ Form::submit('Guardar', ['class'=>'form-control btn btn-sm btn-primary']) }}
</div>