@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Marcfield</div>

                @include('admin._messages')

                @include('errors.list')
               
                <div class="panel-body">
                    	{!! Form::model($marcfield, ['method' => 'PATCH',  'url' => ['admin/marcfields', $marcfield->id], 'id' => 'form-marcfields']) !!}
							@include('admin.marcfields._form', ['submitLabel' => 'Edit'])
						{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop