<?php

namespace App\Http\Controllers;

use App\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        return view('users.index', [
            'children' => $this->getChildren()
        ]);
    }

    public function showProfile()
    {
        return view('users.profile');
    }

    public function saveProfile(Request $request)
    {

    }

    public function updatePassword(Request $request)
    {

    }

    protected function getChildren()
    {
        return Child::where('user_id', Auth::id())->get();
    }
}
