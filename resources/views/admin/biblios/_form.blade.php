<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($submitLabel, ['class' => 'btn btn-success']) !!}
	<button class="btn btn-primary" onclick="javascript:history.back()" value="Cancel">Cancel</button>
</div>