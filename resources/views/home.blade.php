@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-buttons">
                {{--
                    <a href="#" class="btn btn-default btn-sm">Recomeçar</a>
                    <a href="#" class="btn btn-default btn-sm">Guardar Registos</a>
                    <a href="#" class="btn btn-default btn-sm">Formato MARC</a>
                    <a href="#" class="btn btn-default btn-sm">Regressar à lista</a>
                    <a href="#" class="btn btn-default btn-sm">Modificar Pesquisa</a>
                    <a href="#" class="btn btn-default btn-sm">Outra Pesquisa</a>
                --}}
                
                    <a href="/" class="btn btn-default btn-sm">@lang('frontend.restart_search')</a>
                    <a href="/advanced-search" class="btn btn-default btn-sm">@lang('frontend.advanced_search')</a>

                </div>

                <div class="panel-body">
                    @include('admin._messages')

                    @include('errors.list')

                    <h4>@lang('frontend.search_title')</h4>

                    {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
                        <input type="hidden" value="" name="tagfield" id="search-select-tagfield">
                        <div class="form-group">
                            <label for="campo">@lang('frontend.choose_field')</label>
                            <select class="form-control" name="tagsubfield" id="search-select-tagsubfield">
                                <option value="*">@lang('frontend.any_field')</option>
                                @foreach($config['marcfield_search'] as $search_field)
                                    <option value="{{ $search_field[1] }}" id="{{ $search_field[0]}}">{{ $search_field[2] }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="arquivo">@lang('frontend.choose_biblio')</label>
                            <select class="form-control" name="arquivo">
                                <option value="*">@lang('frontend.all_archives')</option>
                                @foreach($biblios as $biblio)
                                    <option value="{{ $biblio->id }}">{{ $biblio->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="expressao">@lang('frontend.text_to_search')</label>
                            <input type="text" class="form-control" name="expressao">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="@lang('frontend.search')" class="btn btn-default btn-submit">
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
