<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RecordRequest;
use App\Http\Controllers\Controller;
use App\Itemtype;
use App\Record;
use App\RecordField;
use App\Biblio;
use Session;

class RecordController extends Controller
{

	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the view with the details of a Record
     * 
     * @param  $id the id of the Record to show
     */
    public function show($id)
    {

    	$record = Record::findOrFail($id)
    				->with(
    					array('fields' => function($query){
    							$query
			    					->join('marcsubfields', 'records_fields.tagsubfield', '=', 'marcsubfields.id')
			    					->join('marcfields', 'marcsubfields.tagfield', '=', 'marcfields.id')
			    					->select('marcfields.description as field', 'marcsubfields.description as subfield', 'records_fields.*')
                                    ->orderBy('marcfields.id')
					   				->get();
    						})
    					)
                        ->where('records.id', '=', $id)
                        ->with('itemtype')->first();

    	return view('admin.records.show', ['record' => $record]);

    }

	public function index()
	{
		if(!Session::has('biblio_id'))
    	{
    		flash()->error('Please select a Library');

    		return view('admin.records.index', ['records' => []]);
    	}

		$biblio = Biblio::with(
				array(
    			'records' => function($query){
    				$query->with(
    					array('fields' => function($query){
    							$query
			    					->join('marcsubfields', 'records_fields.tagsubfield', '=', 'marcsubfields.id')
			    					->join('marcfields', 'marcsubfields.tagfield', '=', 'marcfields.id')
			    					->where('marcfields.tagfield', '200')
			    					->where('marcsubfields.tagsubfield', 'a')
					   				->get();
    						})
    					)->with('itemtype');
    				})
    		)->find(Session::get('biblio_id'));

		return view('admin.records.index', compact('biblio'));
	}


    /**
     * Shows the view to create a new a record
     */
    public function create()
    {
    	if(!Session::has('biblio_id'))
    	{
    		flash()->error('Please select a Library');

    		return redirect()->back();
    	}

    	if(!Session::has('itemtype_id'))
    	{
    		flash()->error('Please select an Itemtype');

    		return redirect()->back();
    	}

    	$itemtype = Itemtype::with(array(
    			'marcfields' => function($query){
    				$query->with('marcsubfields')->get();
    			}))->find(Session::get('itemtype_id'));

    	return view('admin.records.create', ['itemtype' => $itemtype, 'biblio_id' => Session::get('biblio_id')]);
    }


	/**
     * Create a new a record
     */
    public function store(RecordRequest $request)
    {

    	$record = new Record;
		$record->biblio = $request->get('biblio_id');
		$record->itemtype = $request->get('itemtype_id');
		$record->hidden = $request->get('hidden') != null? true : false;
		$record->save();


    	$fields = array();
        $field_index = 0;

    	foreach ($request->get('fields') as $field) {
            if(isset($request->file('fields')[$field_index])){
                $image = $request->file('fields')[$field_index]['value'];

                $basename = $image->getClientOriginalName();
                
                $extension = $image->getClientOriginalExtension();
                
                $filename = basename($basename, '.' . $extension);

                $image_name = $record->biblio . $record->itemtype . $field_index . '_' . $filename . '.' . $extension;

                $image->move(public_path() . '/images', $image_name);

            } else {
                $image_name = '';
            }

    		$rec = new RecordField;
    		$rec->tagfield = $field['marcfield'];
    		$rec->tagsubfield = $field['marcsubfield'];
            if($image_name == '')
                $rec->value = $field['value'];
            else
                $rec->value = $image_name;

    		$fields[] = $rec;
    	}

    	$record->fields()->saveMany($fields);

    	flash()->success('Record added with success.');

    	return redirect('admin/records');
    	
    }

    /**
     * Shows the view to edit a Record
     * 
     * @param  $id the id of the Record to view
     */
    public function edit($id)
    {
        
        $record = Record::
        	with('itemtype')
        	->with('fields')
        	->findOrFail($id);


        $itemtype = Itemtype::with(array(
    			'marcfields' => function($query){
    				$query->with('marcsubfields')->get();
    			}))->find($record->itemtype()->first()->id);

        return view('admin.records.edit', ['record' => $record, 'itemtype' => $itemtype, 'biblio_id' => $record->biblio]);

    }

     /**
     * Updates a new a biblio
     */
    public function update($id, RecordRequest $request)
    {

    	$record = Record::findOrFail($id);
		$record->biblio = $request->get('biblio_id');
		$record->itemtype = $request->get('itemtype_id');
		$record->hidden = $request->get('hidden') != null ? true : false;
		$record->save();

    	$fields = array();
        $field_index = 0;

    	foreach ($request->get('fields') as $field) {

            if(isset($request->file('fields')[$field_index])){
                $image = $request->file('fields')[$field_index]['value'];

                $basename = $image->getClientOriginalName();
                
                $extension = $image->getClientOriginalExtension();
                
                $filename = basename($basename, '.' . $extension);

                $image_name = $record->biblio . $record->itemtype . $field_index . '_' . $filename . '.' . $extension;

                $image->move(public_path() . '/images', $image_name);

            } else {
                $image_name = '';
            }


            if($field['id'] == '')
            {
                $rec = new RecordField;
            }
            else
            {
                $rec = RecordField::findOrFail($field['id']);
            }

    		$rec->record_id = $id;
    		$rec->tagfield = $field['marcfield'];
    		$rec->tagsubfield = $field['marcsubfield'];
    		if($image_name == '')
                $rec->value = $field['value'];
            else
                $rec->value = $image_name;

    		$rec->save();

            $field_index++;
    	}

    	flash()->success('Record edited with success.');

    	return redirect('admin/records');
    	
    }

  

    /**
     * Deletes a Record
     * 
     * @param  $id the id of the Record object to delete
     */
    public function destroy($id)
    {

        $record = Record::findOrFail($id);

        $record->delete();

        flash()->success('Record removed with success.');

        return redirect('admin/records');

    }
}
