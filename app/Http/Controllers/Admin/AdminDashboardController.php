<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $current_Password = $request->current_password;

        if (Hash::check($current_Password, Auth::user()->password)){
            $new_password = $request->password_confirmation;

            $hashed_password = Hash::make($new_password);

            Admin::where('id', Auth::id())->update([
                'password' => $hashed_password,
            ]);

            return back()->with('success', 'Your Password has been updated');

        }

    }
}
