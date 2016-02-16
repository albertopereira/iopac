@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Biblio details</div>

                <div class="panel-body">

                    @include('admin._messages')

                    @include('errors.list')
                   
					<ul class="object-view">
                        <li>
                           {{ $biblio->name }}
                        </li>
                        <li class="btn-group-sm">
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.biblios.edit', ['id' => $biblio->id ]) }}" id="edit_{{ $biblio->id }}">Edit</a>
                            {!! Form::open(array(
                                'class' => 'form-inline form-confirm',
                                'data-title' => 'Confirmation',
                                'data-text' => 'Are you sure?',
                                'method' => 'DELETE',
                                'route' => array('admin.biblios.destroy', $biblio->id)))
                            !!}
                                <input type="submit" value="Delete" id="delete_{{ $biblio->id }}" class="btn btn-danger btn-sm confirmActionForm" />
                            {!! Form::close() !!}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@stop