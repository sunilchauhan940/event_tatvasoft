<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Arr;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::all();
        return view('index',['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $data = $request->input();
        $event = new Event();
        $event->title = $data['title'];
        $event->start_date = $data['start_date'];
        $event->end_date = $data['end_date'];
        $event->recurrence_occurance = $data['recurrence_occurance'];
        $event->recurrence_duration = $data['recurrence_duration'];
        $event->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $event = Event::find($id);
        $start_date = $event->start_date;
        $end_date = $event->end_date;
        $occurance = $event->recurrence_occurance;
        $duration = $event->recurrence_duration;
        $total_recurrence_occurance = 0;
        $eventDates = array();
        $jumpDate = $occurance;
        while(strtotime($start_date) <= strtotime($end_date)){
            array_push($eventDates,$start_date);
            $total_recurrence_occurance += 1;
            switch($event->recurrence_duration){
                case 1: 
                    $start_date =date('Y-m-d', strtotime($start_date. ' + '.$jumpDate.' day'));
                    break;
                case 2: 
                    $jumpDate *= 7;
                    $start_date =date('Y-m-d', strtotime($start_date. ' + '.$jumpDate.' day'));
                    break;
                case 3: 
                    $start_date =date('Y-m-d', strtotime($start_date. ' + '.$jumpDate.' month'));
                    break;
                case 4: 
                    $start_date =date('Y-m-d', strtotime($start_date. ' + '.$jumpDate.' month'));
                    break;
            }            
        }
        // print_r($eventDates);die;
        return view('view',['event'=>$event, 'eventDates' => $eventDates,'total_recurrence_occurance' => $total_recurrence_occurance ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
