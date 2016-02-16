@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-buttons">
                <!--
                    <a href="#" class="btn btn-default btn-sm">Recomeçar</a>
                    <a href="#" class="btn btn-default btn-sm">Guardar Registos</a>
                    <a href="#" class="btn btn-default btn-sm">Formato MARC</a>
                    <a href="#" class="btn btn-default btn-sm">Regressar à lista</a>
                    <a href="#" class="btn btn-default btn-sm">Modificar Pesquisa</a>
                    <a href="#" class="btn btn-default btn-sm">Outra Pesquisa</a>
                -->
                    <div class="search-header-buttons">
                        <a href="/" class="btn btn-default btn-sm">Recomeçar</a>
                        <a href="/advanced-search" class="btn btn-default btn-sm">Pesquisa avançada</a>
                    </div>

                    {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
                        <input type="hidden" value="" name="tagfield" id="search-select-tagfield">

                        <select class="search-header-select" name="tagsubfield" id="search-select-tagsubfield">
                            <option value="*">Qualquer campo</option>
                            <option value="a" id="200">Título</option>
                            <option value="a" id="700">Autor</option>
                            <option value="a" id="605">Assunto</option>
                        </select>

                        <select class="search-header-select" name="arquivo">
                            <option value="*">Todos os arquivos</option>
                            @foreach($biblios as $biblio)
                                <option value="{{ $biblio->id }}" {{ (isset($arquivo) && $arquivo == $biblio->id) ? 'SELECTED' : '' }} >{{ $biblio->name }}</option>
                            @endforeach
                        </select>

                        <input type="text" class="search-header-input" name="expressao">

                        <input type="submit" value="Pesquisar" class="search-header-button btn btn-default btn-submit btn-sm">
                    {!! Form::close() !!}
                </div>

                <div class="panel-body">
                    <h4>Detalhe de registo</h4>

                    <table class="search-results-table">
                        @if( !$record[0]->hidden )
                            @foreach($record[0]->fields as $field)
                                @if( !$field->hidden )
                                    <tr>
                                        <td class="search-results-header">
                                            {{ $field->subfield }}
                                        </td>
                                        <td class="">
                                            @if( $field->tagfield == 700 && $field->tagsubfield == 'a')
                                                <a href="/search?tagfield=700&tagsubfield=a&arquivo=*&expressao={{ $field->value }}">
                                                    {{ $field->value }}
                                                </a>
                                            @elseif( $field->tagfield == 605 && $field->tagsubfield == 'a')
                                                <a href="/search?tagfield=605&tagsubfield=a&arquivo=*&expressao={{ $field->value }}">
                                                    {{ $field->value }}
                                                </a>
                                            @else
                                                {{ $field->value }}
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    </table>
                    
                    <hr />
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
