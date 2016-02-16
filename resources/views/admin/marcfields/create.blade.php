@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create new Marcfield</div>
                @include('admin._messages')

                @include('errors.list')
               

                <div class="panel-body">
                    	{!! Form::open(['url' => 'admin/marcfields']) !!}
							@include('admin.marcfields._form', ['submitLabel' => 'Create'])
						{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop