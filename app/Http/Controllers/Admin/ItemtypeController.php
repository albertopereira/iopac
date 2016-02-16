<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Itemtype;
use App\Marcfield;

use App\Http\Requests\ItemtypeRequest;
use Auth;
use Storage;
use Session;

class ItemtypeController extends Controller
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
     * Show the view with the details of all ItemTypes
     */   
    public function index()
    {

    	$itemtypes = Itemtype::all();

    	return view('admin.itemtypes.index', ['itemtypes' => $itemtypes]);
    }

    /**
     * Show the view with the details of an ItemType
     * 
     * @param  $id the id of the ItemType to show
     */
    public function show($id)
    {

    	$itemtype = Itemtype::findOrFail($id);

    	return view('admin.itemtypes.show', ['itemtype' => $itemtype]);

    }

    /**
     * Shows the view to create a new ItemType
     */
    public function create()
    {

    	return view('admin.itemtypes.create');

    }

    /**
     * Saves a new ItemType
     * 
     * @param  ItemTypeRequest $request
     */
    public function store(ItemtypeRequest $request)
    {

    	$itemtype = Itemtype::create($request->all());

    	flash()->success('Itemtype added with success.');

    	return redirect('admin/itemtypes');

    }

    /**
     * Shows the view to edit an ItemType
     * 
     * @param  $id the id of the ItemType to view
     */
    public function edit($id)
    {

        $itemtype = Itemtype::findOrFail($id);

        $marcfields = Marcfield::all();

        $marcfields_in_itemtype = $itemtype->marcfields()->lists('id')->toArray();

        return view('admin.itemtypes.edit', compact('itemtype', 'marcfields', 'marcfields_in_itemtype'));

    }

    /**
     * Updates the ItemType
     * 
     * @param  $id the id of the ItemType to update
     * @param  ItemRequest $request 
     */
    public function update($id, ItemtypeRequest $request)
    {
        $itemtype = Itemtype::findOrFail($id);

        $itemtype->update($request->all());
       
        $marcfields = $request->input('marcfields');

        if(null === $marcfields)
            $marcfields = array();

        $itemtype->marcfields()->sync(array_keys($marcfields));

        flash()->success('Itemtype edited with success.');

        return redirect('admin/itemtypes');

    }

    /**
     * Deletes an ItemType
     * 
     * @param  $id the id of the ItemType object to delete
     */
    public function destroy($id)
    {

        $itemtype = Itemtype::findOrFail($id);

        $itemtype->delete();

        flash()->success('Itemtype removed with success.');

        return redirect('admin/itemtypes');

    }

    /**
     * Sets the session variable itemtype
     */
    public function change($id)
    {
        $itemtype = Itemtype::findOrFail($id);

        Session::put('itemtype_id', $id);
        Session::put('itemtype_name', $itemtype->name);

        return redirect('admin/records/create');
    }

}
