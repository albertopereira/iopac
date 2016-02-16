@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	List Marcfields
					<ul class="nav navbar-nav navbar-right">
						<li class="btn-group-sm">
							<a href="{{ route('admin.marcfields.create') }}" class="btn btn-primary btn-sm">Create new Marcfield</a>
						</li>
					</ul>
                </div>

                <div class="panel-body">
                    	
		                @include('admin._messages')

		                @include('errors.list')
		               

						<table class="table table-hover">
							<tr>
								<th>Tagfield</th>
								<th>Description</th>
								<th>Actions</th>
							</tr>						
							@foreach ($marcfields as $marcfield)
								<tr>
							    	<td>
							    		{{ $marcfield->tagfield }}
							    	</td>
							    	<td>
							    		{{ $marcfield->description }}
							    		{!! $marcfield->mandatory ? '<span class="superscript">M</span>': '' !!}
							    		{!! $marcfield->repeatable ? '<span class="superscript">R</span>': '' !!}
							    	</td>
							    	<td>
							    		<div class="btn-group-sm table-btn-group">
								    		<a class="btn btn-primary btn-sm" href="{{ route('admin.marcfields.show', ['id' => $marcfield->id ]) }}" id="show_{{ $marcfield->id }}">Show</a>
								    		<a class="btn btn-success btn-sm" href="{{ route('admin.marcfields.edit', ['id' => $marcfield->id ]) }}" id="edit_{{ $marcfield->id }}">Edit</a>
									    	{!! Form::open(array(
											  	'class' => 'form-inline form-confirm',
											  	'data-title' => 'Confirmation',
											  	'data-text' => 'Are you sure?',
											  	'method' => 'DELETE',
											  	'route' => array('admin.marcfields.destroy', $marcfield->id)))
											!!}
												<input type="submit" id="delete_{{ $marcfield->id }}" class="btn btn-danger btn-sm confirmActionForm" value="Delete" />
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