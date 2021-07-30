<?php

namespace App\Http\Controllers\Midwife;

use App\Child;
use App\Http\Controllers\Controller;
use App\Http\Requests\SaveNewbornRequest;
use App\Http\Requests\SaveUserRequest;
use App\Immunization;
use App\Mail\UserAccountCreated;
use App\Newborn;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $records = User::with('children')
            ->where('midwife_id', Auth::guard('midwife')->id())
            ->get();
        return view('midwife.users.index')->with(compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('midwife.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(SaveUserRequest $request)
    {
        $user = new User();
        $user->midwife_id = Auth::guard('midwife')->id();
        $user->type = $request->input('type');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->province = $request->input('province');
        $user->postal = $request->input('postal');
        $user->birthday = $request->input('birthday');
        $user->nic = $request->input('nic');
        // generating password
        $password = Str::random(8);
        $hashed_password = Hash::make($password);
        $user->password = $hashed_password;

        $user->save();

        // sending mail
        Mail::to($request->input('email'))->send(new UserAccountCreated($user, $password));

        return redirect()->back()->with('success', 'User Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(User $user)
    {
        return view('midwife.users.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(User $user)
    {
        return view('midwife.users.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(SaveUserRequest $request, User $user)
    {
        $user->midwife_id = Auth::guard('midwife')->id();
        $user->type = $request->input('type');
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->province = $request->input('province');
        $user->postal = $request->input('postal');
        $user->birthday = $request->input('birthday');
        $user->nic = $request->input('nic');
        $user->save();

        return redirect()->route('midwife.users.index')->with('success', 'Parent Updated Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User Deleted!');
    }

    public function showChild(Child $child)
    {
        return view('midwife.users.child')->with(compact('child'));
    }

    public function createNewborn(Child $child)
    {
        return view('midwife.users.newborn')->with(compact('child'));
    }

    public function storeNewborn(SaveNewbornRequest $request)
    {
        $child_id = $request->input('child_id');

        $newborn = Newborn::firstOrNew();
        $newborn->child_id = $child_id;
        $newborn->birthday = $request->input('birthday');
        $newborn->apgar_score = $request->input('apgar_score');
        $newborn->birth_weight = $request->input('birth_weight');
        $newborn->birth_height = $request->input('birth_height');
        $newborn->birth_hcm = $request->input('birth_hcm');
        $newborn->skin = $request->input('skin');
        $newborn->eyes = $request->input('eyes');
        $newborn->temperature = $request->input('temperature');
        $newborn->notes = $request->input('notes');
        $newborn->save();
        return redirect()->route('midwife.show.child', $child_id)->with('success', 'New Born Record Created Successfully!');
    }

    public function createImmunization(Child $child)
    {
        return view('midwife.users.immunization')->with(compact('child'));
    }

    public function storeImmunization(Request $request)
    {
        $child_id = $request->input('child_id');

        $immunization = new Immunization();
        $immunization->child_id = $child_id;
        $immunization->batch_no = $request->input('batch_no');
        $immunization->age = $request->input('age');
        $immunization->type_of_vaccine = $request->input('type_of_vaccine');
        $immunization->date_of_vaccine = $request->input('date_of_vaccine');
        $immunization->adverse_effects_following_immunization = $request->input('adverse_effects_following_immunization');
        $immunization->bcg_scare = $request->input('bcg_scare');
        $immunization->save();

        return redirect()->route('midwife.show.child', $child_id)->with('success', 'Immunization Record Created Successfully!');
    }

}
