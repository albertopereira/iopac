<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	<table class="table table-hover table-marcfields-itemtypes">
	@if(isset($marcfields))
		@foreach($marcfields as $marcfield)
			<tr class="add-marcfield">
				<td><input type="checkbox" id="tagfield_{{$marcfield->id}}" name="marcfields[{{$marcfield->id}}]" <?php echo in_array($marcfield->id, $marcfields_in_itemtype)?'CHECKED':''; ?>></td>
				<td>{{$marcfield->tagfield}}</td>
				<td>{{$marcfield->description}}</td>
			</tr>
		@endforeach
	@endif
	</table>
</div>

<div class="form-group">
	{!! Form::submit($submitLabel, ['class' => 'btn btn-success', 'id' => 'edit']) !!}
	<button class="btn btn-primary" onclick="javascript:history.back()" value="Cancel">Cancel</button>
</div>