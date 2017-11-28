<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Quote;
use App\Barber;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class QuotesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
      $quotes = Quote::all();
      $events = [];
      $data = Quote::all();
      if($data->count()) {
          foreach ($data as $key => $value) {
              $events[] = Calendar::event(
                  $value->client_name,
                  false,
                  new \DateTime($value->start_date),
                  new \DateTime($value->end_date.' +1 day'),
                  null,
                  // Add color and link on event
               [
                   'color' => '#ff0000',
                   'url' => 'quotes/'.$value->id,
               ]
              );
          }
      }
      $calendar = Calendar::addEvents($events);
      return view('backEnd.admin.quotes.index')
      ->with('calendar', $calendar)
      ->with('quotes', $quotes);
        // $quotes = Quote::all();
        //
        // return view('backEnd.admin.quotes.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $barbers = Barber::all()->pluck('name', 'id');
        return view('backEnd.admin.quotes.create')
        ->with('barbers', $barbers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['hour' => 'required', 'client_name' => 'required', 'barber' => 'required', 'service' => 'required', 'start_date' => 'required', 'end_date' => 'required', ]);

        Quote::create($request->all());

        Session::flash('message', 'Cita agregada!');
        Session::flash('status', 'success');

        return redirect('admin/quotes');
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
        $quote = Quote::findOrFail($id);

        return view('backEnd.admin.quotes.show', compact('quote'));
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
        $quote = Quote::findOrFail($id);

        return view('backEnd.admin.quotes.edit', compact('quote'));
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
        $this->validate($request, ['hour' => 'required', 'client_name' => 'required', 'barber' => 'required', 'service' => 'required', 'start_date' => 'required', 'end_date' => 'required', ]);

        $quote = Quote::findOrFail($id);
        $quote->update($request->all());

        Session::flash('message', 'Cita actualizada!');
        Session::flash('status', 'success');

        return redirect('admin/quotes');
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
        $quote = Quote::findOrFail($id);

        $quote->delete();

        Session::flash('message', 'Cita eliminada!');
        Session::flash('status', 'success');

        return redirect('admin/quotes');
    }

}
