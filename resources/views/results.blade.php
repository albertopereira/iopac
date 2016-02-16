@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading panel-heading-buttons">
                    <div class="search-header-buttons">
                        <a href="/" class="btn btn-default btn-sm">@lang('frontend.restart_search')</a>
                        <a href="/advanced-search" class="btn btn-default btn-sm">@lang('frontend.advanced_search')</a>
                    </div>

                    {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
                        <input type="hidden" value="{{ isset($tagfield) ? $tagfield : '' }}" name="tagfield" id="search-select-tagfield">

                        <select class="search-header-select" name="tagsubfield" id="search-select-tagsubfield">
                                <option value="*"  {{ (isset($tagsubfield) && $tagsubfield == '*' ) ? 'SELECTED' : '' }} >@lang('frontend.any_field')</option>
                                @foreach($config['marcfield_search'] as $search_field)
                                    <option value="{{ $search_field[1] }}" id="{{ $search_field[0] }}"  {{ (isset($tagfield) && $tagfield == $search_field[0] ) ? 'SELECTED' : '' }} >{{ $search_field[2] }}</option>
                                @endforeach
                        </select>

                        <select class="search-header-select" name="arquivo">
                            <option value="*">@lang('frontend.all_archives')</option>
                            @foreach($biblios as $biblio)
                                <option value="{{ $biblio->id }}" {{ (isset($arquivo) && $arquivo == $biblio->id) ? 'SELECTED' : '' }} >{{ $biblio->name }}</option>
                            @endforeach
                        </select>

                        <input type="text" class="search-header-input" name="expressao" value="{{ isset($query) ? $query: '' }}">

                        <input type="submit" value="Pesquisar" class="search-header-button btn btn-default btn-submit btn-sm">
                    {!! Form::close() !!}
                    <div class="search-header-num-results">{{ $total_num_records }} @lang('frontend.results_found')</div>
                </div>

                <div class="panel-body">
                    <h4>@lang('frontend.search_results') ({{ $total_num_records }})</h4>

                    <?php $records_count = 1; ?>

                    @foreach($paginatedSearchResults->items() as $records)

                        <?php unset($repeated_titles); $repeated_titles = array(); ?>
                        
                        <table class="search-results-table">
                            <tr>
                                <td rowspan="10" class="search-results-record-count">{{ $records_count }}</td>
                            </tr>

                            @foreach($records->fields as $record)

                                @if(isset($config['marcfield_ids'][$record->tagfield]) && $config['marcfield_ids'][$record->tagfield][0] == $record->tagsubfield)

                                    <?php ($config['marcfield_ids'][$record->tagfield][2] && !isset($repeated_titles[$record->tagfield])) ? $repeated_titles[$record->tagfield] = true : '' ; ?>
    
                                    <tr>
                                        <td class="search-results-header">
                                            @if(!isset($repeated_titles[$record->tagfield]))

                                                {{ $record->description }}

                                            @elseif($repeated_titles[$record->tagfield])
                                                
                                                {{ $record->description }}

                                                <?php $repeated_titles[$record->tagfield] = false; ?>

                                            @endif
                                        </td>
                                        <td>
                                            @if($record->tagfield === '200' && $record->tagsubfield === 'a')
                                                <a href="/detail/{{ $record->record_id }}">
                                                    {{ $record->value }}
                                                </a>
                                            @else
                                                @if($config['marcfield_ids'][$record->tagfield][1])
                                                    <a href="/search?tagfield={{ $record->tagfield }}&tagsubfield={{ $record->tagsubfield }}&arquivo=*&expressao={{ $record->value }}">
                                                        {{ $record->value }}
                                                    </a>
                                                @else
                                                    {{ $record->value }}
                                                @endif
                                            
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach

                        <?php $assuntos = 0; $records_count++; ?>
                        
                        </table>
                        <table class="search-results-table-footer">
                            <tr>
                                <th>
                                    @lang('frontend.archive')
                                </th>
                                @foreach($records->fields as $record)
                                    @if(isset($config['marcfield_footer'][$record->tagfield]) && $config['marcfield_footer'][$record->tagfield][0] == $record->tagsubfield)
                                        <th>{{ $record->description }}</th>
                                    @endif
                                @endforeach
                            </tr>
                            <tr>
                                <td>
                                    {{ $records->name }}
                                </td>
                                @foreach($records->fields as $record)
                                    @if(isset($config['marcfield_footer'][$record->tagfield]) && $config['marcfield_footer'][$record->tagfield][0] == $record->tagsubfield)
                                        <td>{{ $record->value }}</td>
                                    @endif
                                @endforeach
                            </tr>
                        </table>
                        <hr />
                    @endforeach
                    {!! $paginatedSearchResults->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
