@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Biblio</div>

                <div class="panel-body">
                    
                    @include('admin._messages')

                    @include('errors.list')
                   
                	{!! Form::model($biblio, ['method' => 'PATCH',  'url' => ['admin/biblios', $biblio->id], 'id' => 'form-biblios']) !!}
						@include('admin.biblios._form', ['submitLabel' => 'Edit'])
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop