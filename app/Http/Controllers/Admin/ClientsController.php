<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Client;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ClientsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clients = Client::all();

        return view('backEnd.admin.clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'last_name' => 'required', 'phone' => 'required', 'birthday' => 'required', ]);

        Client::create($request->all());

        Session::flash('message', 'Client added!');
        Session::flash('status', 'success');

        return redirect('admin/clients');
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
        $client = Client::findOrFail($id);

        return view('backEnd.admin.clients.show', compact('client'));
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
        $client = Client::findOrFail($id);

        return view('backEnd.admin.clients.edit', compact('client'));
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
        $this->validate($request, ['name' => 'required', 'last_name' => 'required', 'phone' => 'required', 'birthday' => 'required', ]);

        $client = Client::findOrFail($id);
        $client->update($request->all());

        Session::flash('message', 'Client updated!');
        Session::flash('status', 'success');

        return redirect('admin/clients');
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
        $client = Client::findOrFail($id);

        $client->delete();

        Session::flash('message', 'Client deleted!');
        Session::flash('status', 'success');

        return redirect('admin/clients');
    }

}
