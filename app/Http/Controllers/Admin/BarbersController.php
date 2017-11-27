<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Barber;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class BarbersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $barbers = Barber::all();

        return view('backEnd.admin.barbers.index', compact('barbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.admin.barbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'last_name' => 'required', 'photo' => 'required', 'phone' => 'required', 'address' => 'required', 'birthday' => 'required', 'status' => 'required', ]);

        Barber::create($request->all());

        Session::flash('message', 'Barber added!');
        Session::flash('status', 'success');

        return redirect('admin/barbers');
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
        $barber = Barber::findOrFail($id);

        return view('backEnd.admin.barbers.show', compact('barber'));
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
        $barber = Barber::findOrFail($id);

        return view('backEnd.admin.barbers.edit', compact('barber'));
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
        $this->validate($request, ['name' => 'required', 'last_name' => 'required', 'photo' => 'required', 'phone' => 'required', 'address' => 'required', 'birthday' => 'required', 'status' => 'required', ]);

        $barber = Barber::findOrFail($id);
        $barber->update($request->all());

        Session::flash('message', 'Barber updated!');
        Session::flash('status', 'success');

        return redirect('admin/barbers');
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
        $barber = Barber::findOrFail($id);

        $barber->delete();

        Session::flash('message', 'Barber deleted!');
        Session::flash('status', 'success');

        return redirect('admin/barbers');
    }

}
