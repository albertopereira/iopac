@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	List Records
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle-create" data-toggle="dropdown" role="button" aria-expanded="false">
                            Create new
                            <span class="caret"></span>
                            </a>


	                        <ul class="dropdown-menu" role="menu">
	                        @if (Session::has('itemtypes') && !Auth::guest())
	                            @foreach(Session::get('itemtypes') as $itemtype)
	                                <li><a href="{{ url('/admin/itemtypes/' . $itemtype->id . '/change') }}"><i class="fa fa-btn fa-sign-out"></i>{{ $itemtype->name }}</a></li>
	                            @endforeach
	                        @endif
	                        </ul>
	                    </li>
					</ul>
                </div>

                <div class="panel-body">
                    	
		                @include('admin._messages')

		                @include('errors.list')

						<table class="table table-hover">
							<tr>
								<th>Itemtype</th>
								<th>Name</th>
								<th>Actions</th>
							</tr>

							@if(isset($biblio) && isset($biblio->records))
								@foreach ($biblio->records as $record)
										<tr>
											<td>
												{{ $record->itemtype()->first()->name }}
											</td>
									    	<td>
									    		{{ $record->fields[0]->value }}
									    	</td>
									    	<td>
									    		<div class="btn-group-sm table-btn-group">
										    		<a class="btn btn-primary btn-sm" href="{{ route('admin.records.show', ['id' => $record->id ]) }}" id="show_{{ $record->id }}">Show</a>
										    		<a class="btn btn-success btn-sm" href="{{ route('admin.records.edit', ['id' => $record->id ]) }}" id="edit_{{ $record->id }}">Edit</a>
											    	{!! Form::open(array(
													  	'class' => 'form-inline form-confirm',
													  	'data-title' => 'Confirmation',
													  	'data-text' => 'Are you sure?',
													  	'method' => 'DELETE',
													  	'route' => array('admin.records.destroy', $record->id)))
													!!}
														<input type="submit" id="delete_{{ $record->id }}" class="btn btn-danger btn-sm confirmActionForm" value="Delete" />
													{!! Form::close() !!}
												</div>
									    	</td>
									    </tr>
								@endforeach
							@endif
						</table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop