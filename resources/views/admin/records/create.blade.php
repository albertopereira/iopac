@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create new Record - {{ $itemtype->name }}</div>

                <div class="panel-body">
                    
                    @include('admin._messages')

                    @include('errors.list')
                   
                	{!! Form::open(['url' => 'admin/records']) !!}
						@include('admin.records._form', ['submitLabel' => 'Create'])
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop