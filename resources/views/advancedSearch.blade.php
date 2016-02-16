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
                    <div class="search-header-buttons">
                        <a href="/" class="btn btn-default btn-sm">@lang('frontend.restart_search')</a>
                        <a href="/advanced-search" class="btn btn-default btn-sm">@lang('frontend.advanced_search')</a>
                    </div>
                </div>

                <div class="panel-body">
                    <h4>@lang('frontend.advanced_search')</h4>

                    {!! Form::open(['url' => 'advanced-results', 'method' => 'get']) !!}
                        <div class="form-group">
                            <input type="hidden" value="" name="tagfields[]" id="search-select-tagfield-1">
                            
                            <select class="" name="tagsubfields[]" id="search-select-tagsubfield-1">
                                <option value="*">@lang('frontend.any_field')</option>
                                @foreach($config['marcfield_search'] as $search_field)
                                    <option value="{{ $search_field[1] }}" id="{{ $search_field[0]}}">{{ $search_field[2] }}</option>
                                @endforeach
                            </select>

                            <input type="text" class="advanced-search-input" name="expressoes[]">

                            <select class="" name="conditions[]">
                                <option value="and">@lang('frontend.and')</option>
                                <option value="or">@lang('frontend.or')</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <input type="hidden" value="" name="tagfields[]" id="search-select-tagfield-2">

                            <select class="" name="tagsubfields[]" id="search-select-tagsubfield-2">
                                <option value="*">@lang('frontend.any_field')</option>
                                @foreach($config['marcfield_search'] as $search_field)
                                    <option value="{{ $search_field[1] }}" id="{{ $search_field[0]}}">{{ $search_field[2] }}</option>
                                @endforeach
                            </select>

                            <input type="text" class="advanced-search-input" name="expressoes[]">

                            <select class="" name="conditions[]">
                                <option value="and">@lang('frontend.and')</option>
                                <option value="or">@lang('frontend.or')</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="hidden" value="" name="tagfields[]" id="search-select-tagfield-3">

                            <select class="" name="tagsubfields[]" id="search-select-tagsubfield-3">
                                <option value="*">@lang('frontend.any_field')</option>
                                @foreach($config['marcfield_search'] as $search_field)
                                    <option value="{{ $search_field[1] }}" id="{{ $search_field[0]}}">{{ $search_field[2] }}</option>
                                @endforeach
                            </select>

                            <input type="text" class="advanced-search-input" name="expressoes[]">

                        </div>


                        <div class="form-group">
                            <select class="form-control" name="arquivo">
                                <option value="*">@lang('frontend.all_archives')</option>
                                @foreach($biblios as $biblio)
                                    <option value="{{ $biblio->id }}" {{ (isset($arquivo) && $arquivo == $biblio->id) ? 'SELECTED' : '' }} >{{ $biblio->name }}</option>
                                @endforeach
                            </select>
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
