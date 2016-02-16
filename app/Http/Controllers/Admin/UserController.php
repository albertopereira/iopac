<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
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
     * Show the view with the details of all Users
     */   
    public function index()
    {
    	$users = User::all();

    	return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the view with the details of a User
     * 
     * @param  $id the id of the User to show
     */
    public function show($id)
    {

    	$user = User::findOrFail($id);

    	return view('admin.users.show', ['user' => $user]);

    }

    /**
     * Shows the view to create a new User
     */
    public function create()
    {
    	
    	return view('admin.users.create');

    }

    /**
     * Saves a new User
     * 
     * @param  UserRequest $request
     */
    public function store(UserRequest $request)
    {
    	User::create($request->all());

    	flash()->success('User added with success.');

    	return redirect('admin/users');
    }

    /**
     * Shows the view to edit a User
     * 
     * @param  $id the id of the User to view
     */
    public function edit($id)
    {

        $user = User::findOrFail($id);

        return view('admin.users.edit', compact('user'));

    }

    /**
     * Updates the User
     * 
     * @param  $id the id of the User to update
     * @param  UserRequest $request 
     */
    public function update($id, UserRequest $request)
    {

        $user = User::findOrFail($id);

        $user->update($request->all());

        flash()->success('User edited with success.');

        return redirect('admin/users');

    }

    /**
     * Deletes a User
     * 
     * @param  $id the id of the User object to delete
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);

        $user->delete();

        flash()->success('User removed with success.');

        return redirect('admin/users');

    }
}
