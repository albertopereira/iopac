<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Biblio;

use App\Http\Requests\BiblioRequest;
use Auth;
use Storage;
use Session;

class BibliosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the view with the details of all biblios
     */    
    public function index()
    {

    	$biblios = Biblio::all();

    	return view('admin.biblios.index', ['biblios' => $biblios]);
    }

    /**
     * Show the view with the details of a biblio
     * 
     * @param  $id the id of the biblio to show
     */
    public function show($id)
    {

    	$biblio = Biblio::findOrFail($id);

    	return view('admin.biblios.show', ['biblio' => $biblio]);

    }

    /**
     * Shows the view to create a new a biblio
     */
    public function create()
    {

    	return view('admin.biblios.create');

    }

    /**
     * Saves a new biblio
     * 
     * @param  BiblioRequest $request
     */
    public function store(BiblioRequest $request)
    {

    	$biblio = Biblio::create($request->all());

    	flash()->success('Biblio added with success.');

    	return redirect('admin/biblios');

    }

    /**
     * Shows the view to edit a biblio
     * 
     * @param  $id the id of the biblio to view
     */
    public function edit($id)
    {

        $biblio = Biblio::findOrFail($id);

        return view('admin.biblios.edit', compact('biblio'));

    }

    /**
     * Updates the biblio
     * 
     * @param  $id the id of the biblio to update
     * @param  BiblioRequest $request 
     */
    public function update($id, BiblioRequest $request)
    {

        $biblio = Biblio::findOrFail($id);

        $biblio->update($request->all());

        flash()->success('Biblio edited with success.');

        return redirect('admin/biblios');

    }

    /**
     * Deletes a biblio
     * 
     * @param  $id the id of the biblio object to delete
     */
    public function destroy($id)
    {

        $biblio = Biblio::findOrFail($id);

        $biblio->delete();

        flash()->success('Biblio removed with success.');

        return redirect('admin/biblios');

    }

    /**
     * Sets the session variable biblio
     */
    public function change($id)
    {
        $biblio = Biblio::findOrFail($id);

        Session::put('biblio_id', $id);
        Session::put('biblio_name', $biblio->name);

        return redirect()->back();
    }

}
