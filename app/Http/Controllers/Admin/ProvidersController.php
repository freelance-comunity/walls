<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Provider;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class ProvidersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $providers = Provider::all();

        return view('backEnd.admin.providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.providers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'address' => 'required', 'phone' => 'required', 'email' => 'required', ]);

        Provider::create($request->all());

        Session::flash('message', 'Provider added!');
        Session::flash('status', 'success');

        return redirect('admin/providers');
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
        $provider = Provider::findOrFail($id);

        return view('backEnd.admin.providers.show', compact('provider'));
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
        $provider = Provider::findOrFail($id);

        return view('backEnd.admin.providers.edit', compact('provider'));
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
        $this->validate($request, ['name' => 'required', 'address' => 'required', 'phone' => 'required', 'email' => 'required', ]);

        $provider = Provider::findOrFail($id);
        $provider->update($request->all());

        Session::flash('message', 'Provider updated!');
        Session::flash('status', 'success');

        return redirect('admin/providers');
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
        $provider = Provider::findOrFail($id);

        $provider->delete();

        Session::flash('message', 'Provider deleted!');
        Session::flash('status', 'success');

        return redirect('admin/providers');
    }

}
