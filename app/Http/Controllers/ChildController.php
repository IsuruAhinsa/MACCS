<?php

namespace App\Http\Controllers;

use App\Charts\WeightChart;
use App\Child;
use App\Http\Requests\SaveChildRequest;
use App\Weight;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    public function store(SaveChildRequest $request)
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
       /* $years = Weight::where('child_id', $child->id)
            ->select(DB::raw('YEAR(updated_at) as year'))
            ->orderBy('updated_at', 'asc')
            ->distinct()
            ->get();*/

        /*foreach ($years as $item) {

        }*/

        /*return Weight::where('child_id', $child->id)
            ->where(DB::raw('YEAR(updated_at)'), 2020)
            ->select('weight')
            ->orderBy('updated_at', 'asc')
            ->get();*/


        /*$chart = new WeightChart;
        $chart->labels($dates->values());
        $chart->dataset('Weight', 'bar', $weights->values());*/

        return view('users.children.show', [
            'child' => $child,
        ]);
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
    public function update(SaveChildRequest $request, Child $child)
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
