<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\AdvancedSearchRequest;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

use DB;
use Config;

use App\RecordField;
use App\Record;
use App\Biblio;

class SearchController extends Controller
{

    /**
     * Search records
     * 
     * @param  Request $request
     */
    public function search(Request $request)
    {
        // input search fields
        $tagfield = $request->get('tagfield');
        $tagsubfield = $request->get('tagsubfield');
        $query = $request->get('expressao');
        $arquivo = $request->get('arquivo');

        // get the records
        $records = Record::whereHas('fields', function($q) use ($query, $tagfield, $tagsubfield){

            $q->join('marcsubfields', 'records_fields.tagsubfield', '=', 'marcsubfields.id')
              ->join('marcfields', 'marcsubfields.tagfield', '=', 'marcfields.id')
              ->where('records_fields.value', '!=', '')
              ->where('records_fields.value', 'LIKE', '%' . $query . '%');

            if($tagsubfield != '*')
            {
               $q->where('marcfields.tagfield', $tagfield)
                 ->where('marcsubfields.tagsubfield', $tagsubfield);
            }

        })->with(['fields' => function($q){

            $q->join('marcsubfields', 'records_fields.tagsubfield', '=', 'marcsubfields.id')
              ->join('marcfields', 'records_fields.tagfield', '=', 'marcfields.id')
              ->orderby('marcfields.id')
              ->select('records_fields.value', 'marcsubfields.description', 'records_fields.record_id', 'records_fields.id', 'marcfields.tagfield', 'marcsubfields.tagsubfield');

        }])->join('biblios', 'records.biblio', '=', 'biblios.id')->select('records.*', 'biblios.name');
        

        if($arquivo != '*')
        {
            $records = $records->where('biblio', '=', $arquivo);
        }

        $records = $records->get();

        $total_num_records = count($records);

        $paginatedSearchResults = $this->paginateResults($records, Config::get('settings.search_items_per_page'), $request);

        $biblios = Biblio::All();

        return view('results', compact('paginatedSearchResults', 'total_num_records', 'tagfield', 'tagsubfield', 'query', 'biblios', 'arquivo'));
    }

    /**
     * Advanced search records
     * 
     * @param  Request $request
     */
    public function searchAdvanced(AdvancedSearchRequest $request)
    {
        // get the input fields 
        $tagfields = $request->get('tagfields');
        $tagsubfields = $request->get('tagsubfields');
        $queries = $request->get('expressoes');
        $conditions = $request->get('conditions');
        $arquivo = $request->get('arquivo');

        $whereFunction = 'whereHas';

        $records = new Record;

        for ($i=0; $i < 3; $i++) { 
            
            if($i > 0 && $conditions[$i - 1] == 'or')
                $whereFunction = 'orWhereHas';
            else
                $whereFunction = 'whereHas';

            $records = $records->$whereFunction('fields', function($q) use ($i, $queries, $tagfields, $tagsubfields){

                $q->join('marcsubfields', 'records_fields.tagsubfield', '=', 'marcsubfields.id')
                  ->join('marcfields', 'marcsubfields.tagfield', '=', 'marcfields.id')
                  ->where('records_fields.value', '!=', '')
                  ->where('records_fields.value', 'LIKE', '%' . $queries[$i] . '%');

                if($tagsubfields[$i] != '*')
                {
                   $q->where('marcfields.tagfield', $tagfields[$i])
                     ->where('marcsubfields.tagsubfield', $tagsubfields[$i]);
                }

            });
        }

        $records = $records->with(['fields' => function($q){

            $q->join('marcsubfields', 'records_fields.tagsubfield', '=', 'marcsubfields.id')
              ->join('marcfields', 'records_fields.tagfield', '=', 'marcfields.id')
              ->join('records', 'records_fields.record_id', '=', 'records.id')
              ->orderby('marcfields.id')
              ->select('records_fields.value', 'marcsubfields.description', 'records_fields.record_id', 'records_fields.id', 'marcfields.tagfield', 'marcsubfields.tagsubfield', 'records.id as record_id');

        }])->join('biblios', 'records.biblio', '=', 'biblios.id')->select('records.*', 'biblios.name');

        if($arquivo != '*')
        {
            $records = $records->where('biblio', '=', $arquivo);
        }

        $records = $records->get();

        $total_num_records = count($records);

        $paginatedSearchResults = $this->paginateResults($records, Config::get('settings.search_items_per_page'), $request);

        $biblios = Biblio::All();

        return view('results', compact('paginatedSearchResults', 'total_num_records', 'tagsubfields', 'tagfields', 'queries', 'conditions', 'biblios'));
    }

   /**
     * Show the view with the details of a Record
     * 
     * @param  $id the id of the Record to show
     */
    public function showRecordsDetails($id)
    {

        $record = Record::findOrFail($id)
                    ->with(
                        array('fields' => function($query){
                                $query
                                    ->join('marcsubfields', 'records_fields.tagsubfield', '=', 'marcsubfields.id')
                                    ->join('marcfields', 'marcsubfields.tagfield', '=', 'marcfields.id')
                                    ->select('marcfields.description as field', 'marcsubfields.description as subfield', 'records_fields.*', 'marcfields.tagfield as tagfield', 'marcsubfields.tagsubfield as tagsubfield', 'marcsubfields.hidden')
                                    ->orderBy('marcfields.id')
                                    ->get();
                            })
                        )
                        ->where('records.id', '=', $id)
                        ->with('itemtype')->get();
        
        $biblios = Biblio::All();

        return view('detail', ['record' => $record, 'biblios' => $biblios]);

    }    

    /**
     * Paginate a set of record results
     * 
     * @param $records the set of records
     * @param $perPage number of records to show per page
     * @param $request the request object
     *
     * @return the LengthAwarePaginator object
     */
    protected function paginateResults($records, $perPage, $request){

        //Get current page form url e.g. &page=6
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        //Create a new Laravel collection from the array data
        $collection = new Collection($records);

        //Slice the collection to get the items to display in current page
        $currentPageSearchResults = $collection->slice(($currentPage - 1) * $perPage, $perPage)->all(); 

        //Create the paginator
        return new LengthAwarePaginator($currentPageSearchResults, count($collection), $perPage, $currentPage, ['path' => $request->url(), 'query' => $request->query()]);

    }
}
