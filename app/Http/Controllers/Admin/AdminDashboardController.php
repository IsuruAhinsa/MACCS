<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function updatePassword(Request $request)
    {
        dd($request->all());
    }
}
