<?php

namespace App\Http\Controllers\Midwife;

use App\Appointment;
use App\Http\Controllers\Controller;
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
        $send = Auth::guard('midwife')->user()->appointments;

        return view('users.appointments.sent', [
            'records' => $send
        ]);
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
    public function create(User $user)
    {
        return view('midwife.appointments.create')->with(compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $midwife = Midwife::find(Auth::guard('midwife')->id());

        $midwife->appointments()->create([
            'user_id' => $request->input('user_id'),
            'date' => Carbon::parse($request->input('date'))->format('Y-m-d'),
            'time' => $request->input('time'),
            'venue' => $request->input('venue'),
            'notes' => $request->input('notes'),
        ]);

        return redirect()->route('midwife.appointments.index')->with('success', 'Appointment Created!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Appointment $appointment)
    {
        //
    }

    public function approved(Appointment $appointment)
    {
        $appointment->is_approved = true;
        $appointment->save();
        return back()->with('success', 'Appointment Approved!');
    }
}
