<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Midwife;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MidwifeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $records = Midwife::all();
        return view('admin.midwives.index')->with(compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.midwives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $midwife = new Midwife();
        $midwife->first_name = $request->input('first_name');
        // email and password need to be handled specially because the need to respect config values on an edit.
        $midwife->email = e($request->input('email'));
        $midwife->phone = $request->input('phone');

        // generate random password
        $password = Str::random(8);
        $hashed_password = Hash::make($password);

        $midwife->password = $hashed_password;
        $midwife->nic = $request->input('nic');
        $midwife->cases = $request->input('cases');
        $midwife->save();

        return redirect()->back()->with('password', $password);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Midwife  $midwife
     * @return \Illuminate\Http\Response
     */
    public function show(Midwife $midwife)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Midwife $midwife)
    {
        return view('admin.midwives.edit')->with(compact('midwife'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Midwife $midwife)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Midwife $midwife)
    {
        //
    }
}
