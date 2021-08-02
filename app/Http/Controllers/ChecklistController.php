<?php

namespace App\Http\Controllers;

use App\Child;
use App\Group;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Child $child, Group $group)
    {
        return view('users.children.checklists.edit', [
            'group' => $group,
            'child' => $child
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Child $child)
    {
        $data = $request->all();

        $child->checklists()->detach();

        if ($request->input('checklist')) {
            foreach ($data['checklist'] as $key => $item) {
                $child->checklists()->attach($item);
            }
        }

        return back();
    }

}
