@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	List Itemtypes
					<ul class="nav navbar-nav navbar-right">
						<li class="btn-group-sm">
							<a href="{{ route('admin.itemtypes.create') }}" class="btn btn-primary btn-sm">Create new Itemtype</a>
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
							@foreach ($itemtypes as $itemtype)
								<tr>
							    	<td>
							    		{{ $itemtype->name }}
							    	</td>
							    	<td>
							    		<div class="btn-group-sm table-btn-group">
								    		<a class="btn btn-primary btn-sm" href="{{ route('admin.itemtypes.show', ['id' => $itemtype->id ]) }}" id="show_{{ $itemtype->id }}">Show</a>
								    		<a class="btn btn-success btn-sm" href="{{ route('admin.itemtypes.edit', ['id' => $itemtype->id ]) }}" id="edit_{{ $itemtype->id }}">Edit</a>
									    	{!! Form::open(array(
											  	'class' => 'form-inline form-confirm',
											  	'data-title' => 'Confirmation',
											  	'data-text' => 'Are you sure?',
											  	'method' => 'DELETE',
											  	'route' => array('admin.itemtypes.destroy', $itemtype->id)))
											!!}
												<input type="submit" id="delete_{{ $itemtype->id }}" class="btn btn-danger btn-sm confirmActionForm" value="Delete" />
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