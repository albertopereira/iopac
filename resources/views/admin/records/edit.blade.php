@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Record</div>

                <div class="panel-body">
                    
                    @include('admin._messages')

                    @include('errors.list')
                   
                	{!! Form::model($record, ['method' => 'PATCH',  'url' => ['admin/records', $record->id], 'id' => 'form-records', 'files' => true]) !!}
						@include('admin.records._form', ['submitLabel' => 'Edit'])
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop