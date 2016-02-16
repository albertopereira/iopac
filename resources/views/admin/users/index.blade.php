@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	List Users
					<ul class="nav navbar-nav navbar-right">
						<li class="btn-group-sm">
							<a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">Create new User</a>
						</li>
					</ul>
                </div>

                <div class="panel-body">
                    	
		                @include('admin._messages')

		                @include('errors.list')
		               

						<table class="table table-hover">
							<tr>
								<th>Name</th>
								<th>Actions</th>
							</tr>
							@foreach ($users as $user)
								<tr>
							    	<td>
							    		{{ $user->name }}
							    	</td>
							    	<td>
							    		<div class="btn-group-sm table-btn-group">
								    		<a class="btn btn-primary btn-sm" href="{{ route('admin.users.show', ['id' => $user->id ]) }}" id="show_{{ $user->id }}">Show</a>
								    		<a class="btn btn-success btn-sm" href="{{ route('admin.users.edit', ['id' => $user->id ]) }}" id="edit_{{ $user->id }}">Edit</a>
									    	{!! Form::open(array(
											  	'class' => 'form-inline form-confirm',
											  	'data-title' => 'Confirmation',
											  	'data-text' => 'Are you sure?',
											  	'method' => 'DELETE',
											  	'route' => array('admin.users.destroy', $user->id)))
											!!}
												<input type="submit" id="delete_{{ $user->id }}" class="btn btn-danger btn-sm confirmActionForm" value="Delete" />
											{!! Form::close() !!}
										</div>
							    	</td>
							    </tr>
							@endforeach
						</table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop