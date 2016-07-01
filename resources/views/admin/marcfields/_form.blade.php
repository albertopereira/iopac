<div class="form-group">
	{!! Form::label('tagfield', 'Tagfield') !!}
	{!! Form::text('tagfield', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Description') !!}
	{!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('repeatable', 'Repeatable') !!}
	{!! Form::checkbox('repeatable', null, null) !!}
</div>

<div class="form-group">
	{!! Form::label('mandatory', 'Mandatory') !!}
	{!! Form::checkbox('mandatory', null, null) !!}
</div>

<hr />
<h3>Subfields</h3>
<div class="form-group">
	<table class="table table-hover table-marcsubfields">
		<tr>
			<th>Subtagfield</th>
			<th>Description</th>
			<th>Repeatable</th>
			<th>Mandatory</th>
			<th>Hidden</th>
			<th>Type</th>
			<th><a href="#" id="add_marcsubfield" class="btn btn-info btn-sm" />Add field</a></th>
		</tr>
		@if(isset($marcsubfields))
			<?php $i = 1; ?>
			@foreach($marcsubfields as $marcsubfield)
				<input type="hidden" name="records[{{$i}}][id]" value="{{ $marcsubfield->id }}">
				<input type="hidden" name="records[{{$i}}][tagfield]" id="marcfield_id" value="{{ $marcfield->id }}">
				<tr class="edited-marcsubfield">
					<td><input type="text" name="records[{{$i}}][tagsubfield]" value="{{ $marcsubfield->tagsubfield }}"></td>
					<td><input type="text" name="records[{{$i}}][description]" value="{{ $marcsubfield->description }}"></td>
					<td><input type="checkbox" name="records[{{$i}}][repeatable]" <?php if($marcsubfield->repeatable) echo "checked"; ?>></td>
					<td><input type="checkbox" name="records[{{$i}}][mandatory]" <?php if($marcsubfield->mandatory) echo "checked"; ?>></td>
					<td><input type="checkbox" name="records[{{$i}}][hidden]" <?php if($marcsubfield->hidden) echo "checked"; ?>></td>
					<td>
						<select name="records[{{$i}}][type]">
						  <option value="text" <?php if($marcsubfield->type === 'text') echo "selected"; ?>>Text</option> 
						  <option value="longtext" <?php if($marcsubfield->type === 'longtext') echo "selected"; ?>>Long Text</option>
						  <option value="image" <?php if($marcsubfield->type === 'image') echo "selected"; ?>>Image</option>
						</select>
					<td>
						<a href="{{ route('admin.marcfields.destroyMarcsubfield', [$marcsubfield->id, $marcfield->id]) }}" id="delete_{{ $marcsubfield->id }}" data-title="Confirmation" data-text="Are you sure=" class="btn btn-danger btn-sm confirmActionLink" />Delete</a>
					</td>
				</tr>
			<?php $i++; ?>  
			@endforeach
		@else
			<tr>
				<td><input type="text" name="records[1][tagsubfield]"></td>
				<td><input type="text" name="records[1][description]"></td>
				<td><input type="checkbox" name="records[1][repeatable]"></td>
				<td><input type="checkbox" name="records[1][mandatory]"></td>
				<td><input type="checkbox" name="records[1][hidden]"></td>
			</tr>
		@endif
	</table>	
</div>


<div class="form-group">
	{!! Form::submit($submitLabel, ['class' => 'btn btn-success']) !!}
	<button class="btn btn-primary" onclick="javascript:history.back()" value="Cancel">Cancel</button>
</div>