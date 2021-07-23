<?php

namespace App\Http\Controllers\Midwife;

use App\Http\Controllers\Controller;
use App\Http\Requests\SaveUserRequest;
use App\Mail\AdminAccountCreated;
use App\Mail\UserAccountCreated;
use App\Midwife;
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
        $records = User::all();
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
        //
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
}
