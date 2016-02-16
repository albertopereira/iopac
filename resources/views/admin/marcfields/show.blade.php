@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Marcfield details</div>

                <div class="panel-body">
                
                    @include('admin._messages')

                    @include('errors.list')
                   
					<ul class="object-view">
                        <li>
                           {{ $marcfield->tagfield }}
                        </li>
                        <li>
                           {{ $marcfield->description }}
                        </li>
                        <li class="btn-group-sm">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.marcfields.edit', ['id' => $marcfield->id ]) }}" id="edit_{{ $marcfield->id }}">Edit</a>
                            {!! Form::open(array(
                                'class' => 'form-inline form-confirm',
                                'data-title' => 'Confirmation',
                                'data-text' => 'Are you sure?',
                                'method' => 'DELETE',
                                'route' => array('admin.marcfields.destroy', $marcfield->id)))
                            !!}
                                <input type="submit" value="Delete" id="delete_{{ $marcfield->id }}" class="btn btn-danger btn-sm confirmActionForm" />
                            {!! Form::close() !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@stop