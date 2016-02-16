@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Record details</div>

                <div class="panel-body">

                    @include('admin._messages')

                    @include('errors.list')
                   
					<ul class="object-view">
                        @foreach($record->fields as $field)
                            @if($field->value != '')
                                <li>
                                   <strong>{{ $field->field }} | {{ $field->subfield }} </strong>
                                </li>
                                <li>
                                   {{ $field->value }}
                                </li>
                            @endif
                        @endforeach
                        <li class="btn-group-sm">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.records.edit', ['id' => $record->id ]) }}" id="edit_{{ $record->id }}">Edit</a>
                            {!! Form::open(array(
                                'class' => 'form-inline form-confirm',
                                'data-title' => 'Confirmation',
                                'data-text' => 'Are you sure?',
                                'method' => 'DELETE',
                                'route' => array('admin.records.destroy', $record->id)))
                            !!}
                                <input type="submit" value="Delete" id="delete_{{ $record->id }}" class="btn btn-danger btn-sm confirmActionForm" />
                            {!! Form::close() !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@stop