<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Midwife;
use Illuminate\Http\Request;

class MidwifeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.midwives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param  \App\Midwife  $midwife
     * @return \Illuminate\Http\Response
     */
    public function edit(Midwife $midwife)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Midwife  $midwife
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Midwife $midwife)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Midwife  $midwife
     * @return \Illuminate\Http\Response
     */
    public function destroy(Midwife $midwife)
    {
        //
    }
}
