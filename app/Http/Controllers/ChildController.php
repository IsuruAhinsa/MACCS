<?php

namespace App\Http\Controllers;

use App\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChildController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('users.children.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $child = new Child();
        $child->user_id = Auth::id();
        $child->first_name = $request->input('first_name');
        $child->last_name = $request->input('last_name');
        $child->birthday = $request->input('birthday');
        $child->date_of_registration = $request->input('date_of_registration');
        $child->birth_weight = $request->input('birth_weight');
        $child->health_status = $request->input('health_status');
        $child->save();

        return redirect(url('/'))->with('Your child added successfully!');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Child $child)
    {
        return view('users.children.show')->with(compact('child'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Child $child)
    {
        return view('users.children.edit')->with(compact('child'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Child $child)
    {
        $child->user_id = Auth::id();
        $child->first_name = $request->input('first_name');
        $child->last_name = $request->input('last_name');
        $child->birthday = $request->input('birthday');
        $child->date_of_registration = $request->input('date_of_registration');
        $child->birth_weight = $request->input('birth_weight');
        $child->health_status = $request->input('health_status');
        $child->save();

        return redirect(url('/'))->with('Your child updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Child $child)
    {
        $child->delete();
        return back()->with('success', 'Child Deleted!');
    }
}
