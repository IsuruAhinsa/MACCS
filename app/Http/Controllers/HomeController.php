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

    protected function getChildren()
    {
        return Child::where('user_id', Auth::id())->get();
    }
}
