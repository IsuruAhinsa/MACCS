<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function showProfile()
    {
        return view('admin.profile');
    }

    public function saveProfile(Request $request)
    {
        $admin = Admin::findOrFail(Auth::guard('admin')->id());

        app('App\Http\Requests\ImageUploadRequest')->handleImages('image', 'img/admins/', $admin, 'image');

        $admin->name = $request->input('name');
        $admin->email = $request->input('email');

        if ($request->input('type') == 'super administrator') {
            $admin->is_super = true;
        } else {
            $admin->is_super = false;
        }

        $admin->save();

        return redirect()->back()->with('success', 'Profile Saved!');
    }

    public function updatePassword(Request $request)
    {

    }
}
