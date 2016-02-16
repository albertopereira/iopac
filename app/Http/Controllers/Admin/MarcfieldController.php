<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Marcfield;
use App\Marcsubfield;

use App\Http\Requests\MarcfieldRequest;
use Auth;
use Storage;
use Session;

class MarcfieldController extends Controller
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
     * Show the view with the details of all Marcfields
     */ 
    public function index()
    {

    	$marcfields = Marcfield::all();

    	return view('admin.marcfields.index', ['marcfields' => $marcfields]);
    }

    /**
     * Show the view with the details of a Marcfield
     * 
     * @param  $id the id of the Marcfield to show
     */
    public function show($id)
    {

    	$marcfield = Marcfield::findOrFail($id);

    	return view('admin.marcfields.show', ['marcfield' => $marcfield]);

    }

    /**
     * Shows the view to create a new MarcField and correspondent Marcsubfields
     */
    public function create()
    {

    	return view('admin.marcfields.create');

    }

    /**
     * Saves a new MarcField and correspondent Marcsubfields
     * 
     * @param  MarcfieldRequest $request
     */
    public function store(MarcfieldRequest $request)
    {
        // create the new Marcfield with all the fields except the ones related
        // with the Marcsubfields
        $marcfield = Marcfield::create($request->except(['records']));
        
        // map the array of Marcsubfields and create them
        $marcfield->marcsubfields()->saveMany(array_map(function ($record) {
            return new Marcsubfield($record);
        }, $request->records));
                    
    	
        flash()->success('Marcfield added with success.');

    	return redirect('admin/marcfields');

    }

    /**
     * Shows the view to edit a Marfield and correspondent Marcsubfields
     * 
     * @param  $id the id of the Marcfield to view
     */
    public function edit($id)
    {
        
        $marcfield = Marcfield::findOrFail($id);

        $marcsubfields = $marcfield->marcsubfields()->get();

        return view('admin.marcfields.edit', compact('marcfield', 'marcsubfields'));

    }

    /**
     * Updates a MarcField and correspondent Marcsubfields
     *
     * @param  $id the id of the Marcfield to update 
     * @param  MarcfieldRequest $request
     */
    public function update($id, MarcfieldRequest $request)
    {
        $marcfield = Marcfield::findOrFail($id);

        $marcfield->update($request->except(['records']));

        foreach ($request->records as $record) {
            Marcsubfield::updateOrCreate(['id' => $record['id']], $record);
        }

        flash()->success('Marcfield edited with success.');

        return redirect('admin/marcfields');

    }

    /**
     * Deletes a Marcfield and the correspondent Marcsubfields
     * 
     * @param  $id the id of the Marcfield object to delete
     */
    public function destroy($id)
    {

        $marcfield = Marcfield::findOrFail($id);

        $marcfield->delete();

        flash()->success('Marcfield removed with success.');

        return redirect('admin/marcfields');

    }

     /**
     * Deletes a Marcsubfield
     * 
     * @param  $id the id of the Marcsubfield object to delete
     */
    public function destroyMarcsubfield($id, $id_edited_marcfield)
    {

        if(Marcfield::findOrFail($id_edited_marcfield)->marcsubfields->count() <= 1)
        {
            flash()->error('A Marcfield must have at least one marcsubfield.');

            return redirect('admin/marcfields/' . $id_edited_marcfield . '/edit');
        }            

        $marcsubfield = Marcsubfield::findOrFail($id);

        $marcsubfield->delete();

        flash()->success('Marcsubfield removed with success.');

        return redirect('admin/marcfields/' . $id_edited_marcfield . '/edit');

    }

}
