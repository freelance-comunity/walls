<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class RoleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('backEnd.admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        Role::create($request->all());

        Session::flash('message', 'SpatiePermissionModelsRole added!');
        Session::flash('status', 'success');

        return redirect('admin/roles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);

        return view('backEnd.admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $role = Role::findOrFail($id);

        return view('backEnd.admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {

        $role = Role::findOrFail($id);
        $role->update($request->all());

        Session::flash('message', 'SpatiePermissionModelsRole updated!');
        Session::flash('status', 'success');

        return redirect('admin/roles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        $role->delete();

        Session::flash('message', 'SpatiePermissionModelsRole deleted!');
        Session::flash('status', 'success');

        return redirect('admin/roles');
    }

}
