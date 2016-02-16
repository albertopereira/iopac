@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>

                <div class="panel-body">
 
                    @include('admin._messages')

                    @include('errors.list')
               
                	{!! Form::model($user, ['method' => 'PATCH',  'url' => ['admin/users', $user->id], 'id' => 'form-users']) !!}
						@include('admin.users._form', ['submitLabel' => 'Edit', 'create' => false])
					{!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop