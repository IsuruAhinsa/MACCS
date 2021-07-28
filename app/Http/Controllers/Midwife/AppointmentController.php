<?php

namespace App\Http\Controllers\Midwife;

use App\Appointment;
use App\Http\Controllers\Controller;
use App\Midwife;
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
        return view('midwife.appointments.sent');
    }

    public function received()
    {
        $inbox = Appointment::where('midwife_id', Auth::guard('midwife')->id())->get();

        return view('midwife.appointments.received', [
            'records' => $inbox
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('midwife.appointments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $midwife = Midwife::find(Auth::guard('midwife')->id());

        $midwife->appointments()->create([
            'midwife_id' => $midwife->midwife_id,
            'date' => Carbon::parse($request->input('date'))->format('Y-m-d'),
            'time' => $request->input('time'),
            'venue' => $request->input('venue'),
            'notes' => $request->input('notes'),
        ]);

        return redirect()->route('midwife.appointments.index')->with('success', 'Appointment Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
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
