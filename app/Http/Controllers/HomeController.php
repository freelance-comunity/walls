<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $events = [];
      // $data = Quote::all();
      // if($data->count()) {
      //     foreach ($data as $key => $value) {
      //         $events[] = Calendar::event(
      //             $value->client_name,
      //             true,
      //             new \DateTime($value->start_date),
      //             new \DateTime($value->end_date.' +1 day'),
      //             null,
      //             // Add color and link on event
      //          [
      //              'color' => '#ff0000',
      //              'url' => 'pass here url and any route',
      //          ]
      //         );
      //     }
      // }
      // $calendar = Calendar::addEvents($events);
      // return view('home', compact('calendar'));
      return view('home');
    }
}
