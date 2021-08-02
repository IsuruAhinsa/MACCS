<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\MOH;
use Illuminate\Http\Request;

class MOHController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.MOH.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(MOH $mOH)
    {
        return view('admin.MOH.edit')->with(compact('mOH'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, MOH $mOH)
    {
        $mOH->division_no = $request->input('division_no');
        $mOH->division_address = $request->input('division_address');
        $mOH->sub_division_no = $request->input('sub_division_no');
        $mOH->sub_division_address = $request->input('sub_division_address');
        $mOH->save();

        return redirect()->route('admin.mohs.index')->with('success', 'MOH updated Successfully!');
    }
}
