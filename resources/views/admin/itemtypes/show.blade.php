@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Itemtype details</div>

                <div class="panel-body">

                    @include('admin._messages')

                    @include('errors.list')
                   
					<ul class="object-view">
                        <li>
                           {{ $itemtype->name }}
                        </li>
                        <li class="btn-group-sm">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.itemtypes.edit', ['id' => $itemtype->id ]) }}" id="edit_{{ $itemtype->id }}">Edit</a>
                            {!! Form::open(array(
                                'class' => 'form-inline form-confirm',
                                'data-title' => 'Confirmation',
                                'data-text' => 'Are you sure?',
                                'method' => 'DELETE',
                                'route' => array('admin.itemtypes.destroy', $itemtype->id)))
                            !!}
                                <input type="submit" value="Delete" id="delete_{{ $itemtype->id }}" class="btn btn-danger btn-sm confirmActionForm" />
                            {!! Form::close() !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@stop