<input type="hidden" name="itemtype_id" value="{{ $itemtype->id }}">
<input type="hidden" name="biblio_id" value="{{ $biblio_id }}">

<div class="form-group">
	{!! Form::label('hidden', 'Hidden') !!}
	{!! Form::checkbox('hidden', null, (!isset($record)) ? false : $record->hidden) !!}
</div>

{{-- TO REFACTOR! I'm pretty sure this can be done in a cleaner way --}}

<?php $i = 0; $new = true; ?>

@foreach($itemtype->marcfields as $marcfield)
	<h4><strong><div {{ ($marcfield->mandatory == 1) ? 'class=record-mandatory-field' : '' }}>{{ $marcfield->description . ' (' . $marcfield->tagfield . ')' }}</div></strong></h4>
		@foreach($marcfield->marcsubfields as $marcsubfield)

			@if(isset($record))
				@foreach($record->fields as $field)
					@if($field->tagfield == $marcfield->id && $field->tagsubfield == $marcsubfield->id)
						<?php $new = false; ?>
						<div class="form-group record-fields" id="field_{{ $i }}">
							{!! Form::hidden('fields[' . $i . '][id]', $field->id ) !!}
							{!! Form::hidden('fields[' . $i . '][marcfield_mandatory]', $marcfield->mandatory ) !!}
							{!! Form::hidden('fields[' . $i . '][marcfield]', $marcfield->id ) !!}
							{!! Form::hidden('fields[' . $i . '][marcsubfield_description]', $marcsubfield->description ) !!}
							{!! Form::hidden('fields[' . $i . '][marcsubfield]', $marcsubfield->id ) !!}
							{!! Form::hidden('fields[' . $i . '][mandatory]', $marcsubfield->mandatory ) !!}
							{!! Form::label('fields[' . $i . '][value]', $marcsubfield->description . ' (' . $marcsubfield->tagsubfield . ')', ['class' => ($marcsubfield->mandatory == 1) ? 'record-mandatory-field' : '']) !!}
							{!! Form::text('fields[' . $i . '][value]', $field->value, ['class' => 'form-control']) !!}
						</div>
						<?php $i++; ?>	
					@endif
				@endforeach
				
				@if($new)
						<div class="form-group record-fields" id="field_{{ $i }}">
							{!! Form::hidden('fields[' . $i . '][id]') !!}
							{!! Form::hidden('fields[' . $i . '][marcfield_mandatory]', $marcfield->mandatory ) !!}
							{!! Form::hidden('fields[' . $i . '][marcfield]', $marcfield->id ) !!}
							{!! Form::hidden('fields[' . $i . '][marcsubfield_description]', $marcsubfield->description ) !!}
							{!! Form::hidden('fields[' . $i . '][marcsubfield]', $marcsubfield->id ) !!}
							{!! Form::hidden('fields[' . $i . '][mandatory]', $marcsubfield->mandatory ) !!}
							{!! Form::label('fields[' . $i . '][value]', $marcsubfield->description . ' (' . $marcsubfield->tagsubfield . ')', ['class' => ($marcsubfield->mandatory == 1) ? 'record-mandatory-field' : '']) !!}
							{!! Form::text('fields[' . $i . '][value]', null, ['class' => 'form-control']) !!}
						</div>
						<?php $i++;?>	
				@endif
				<?php $new = true; ?>
			@else
				<div class="form-group record-fields" id="field_{{ $i }}">
					{!! Form::hidden('fields[' . $i . '][id]') !!}
					{!! Form::hidden('fields[' . $i . '][marcfield_mandatory]', $marcfield->mandatory ) !!}
					{!! Form::hidden('fields[' . $i . '][marcfield]', $marcfield->id ) !!}
					{!! Form::hidden('fields[' . $i . '][marcsubfield_description]', $marcsubfield->description ) !!}
					{!! Form::hidden('fields[' . $i . '][marcsubfield]', $marcsubfield->id ) !!}
					{!! Form::hidden('fields[' . $i . '][mandatory]', $marcsubfield->mandatory ) !!}
					{!! Form::label('fields[' . $i . '][value]', $marcsubfield->description . ' (' . $marcsubfield->tagsubfield . ')', ['class' => ($marcsubfield->mandatory == 1) ? 'record-mandatory-field' : '']) !!}
					{!! Form::text('fields[' . $i . '][value]', null, ['class' => 'form-control']) !!}
				</div>
				<?php $i++; ?>
			@endif
		
			@if($marcsubfield->repeatable)
				<div class="form-group record-fields">
					<a href="#" class="btn btn-default btn-sm btn-add" id="add_{{ $i - 1 }}">Add {{ $marcsubfield->description }}</a>
				</div>
			@endif
			
		@endforeach
@endforeach

<div class="form-group">
	{!! Form::submit($submitLabel, ['class' => 'btn btn-success']) !!}
	<button class="btn btn-primary" onclick="javascript:history.back()" value="Cancel">Cancel</button>
</div>

<script type="text/javascript">
	$(function(){

		$('.btn-add').on('click', function(e){
			e.preventDefault();
			
			var $element_id = $(this).attr('id').substr(4);

			var $new_element_num = $(':input[type=text]').length;

			var el = $('<div/>',{
				'class': 'form-group record-fields'
			}).append(
				$('<input/>', {
					'type': 'hidden',
					'value': '',
					'name' : 'fields[' + $new_element_num + '][id]'
				})
			).append(
				$('<input/>', {
					'type': 'hidden',
					'value': $('input[name="fields[' + $element_id + '][marcfield_mandatory]"]').val(),
					'name' : 'fields[' + $new_element_num + '][marcfield_mandatory]'
				})
			).append(
				$('<input/>', {
					'type': 'hidden',
					'value': $('input[name="fields[' + $element_id + '][marcfield]"]').val(),
					'name' : 'fields[' + $new_element_num + '][marcfield]'
				})
			).append(
				$('<input/>', {
					'type': 'hidden',
					'value': $('input[name="fields[' + $element_id + '][marcsubfield_description]"]').val(),
					'name' : 'fields[' + $new_element_num + '][marcsubfield_description]'
				})
			).append(
				$('<input/>', {
					'type': 'hidden',
					'value': $('input[name="fields[' + $element_id + '][marcsubfield]"]').val(),
					'name' : 'fields[' + $new_element_num + '][marcsubfield]'
				})
			).append(
				$('<input/>', {
					'type': 'hidden',
					'value': $('input[name="fields[' + $element_id + '][mandatory]"]').val(),
					'name' : 'fields[' + $new_element_num + '][mandatory]'
				})
			).append(
				$('<label/>', {
					'type': 'text',
					'text': $('input[name="fields[' + $element_id + '][marcsubfield_description]"]').val(),
					'class' : 'record-mandatory-field',
					'for' : 'fields[' + $new_element_num + '][value]'
				})
			).append(
				$('<input/>', {
					'type': 'text',
					'class': 'form-control',
					'name' : 'fields[' + $new_element_num + '][value]',
					'id': 'fields[' + $new_element_num + '][value]'
				})
			)
			.insertAfter($('#field_' + $element_id));
				
		});
	})
</script>