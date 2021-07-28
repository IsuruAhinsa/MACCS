<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Http\Requests\SaveAppointmentRequest;
use App\Midwife;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $send = Auth::user()->appointments;

        return view('users.appointments.index', [
            'records' => $send
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('users.appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(SaveAppointmentRequest $request)
    {
        $user = User::find(Auth::id());

        $user->appointments()->create([
            'midwife_id' => $user->midwife_id,
            'date' => Carbon::parse($request->input('date'))->format('Y-m-d'),
            'time' => $request->input('time'),
            'venue' => $request->input('venue'),
            'notes' => $request->input('notes'),
        ]);

        return redirect()->route('appointments.index')->with('success', 'Appointment Created!');

        /*$appointment = new Appointment();
        $appointment->user_id = Auth::id();
        $appointment->date = Carbon::parse($request->input('date'))->format('Y-m-d');
        $appointment->time = $request->input('time');
        $appointment->venue = $request->input('venue');
        $appointment->notes = $request->input('notes');
        $appointment->save();

        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
