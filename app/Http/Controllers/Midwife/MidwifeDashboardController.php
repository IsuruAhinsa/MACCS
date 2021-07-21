<?php

namespace App\Http\Controllers\Midwife;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MidwifeDashboardController extends Controller
{
    public function index()
    {
        return view('midwife.index');
    }

    public function showProfile()
    {
        return view('midwife.profile');
    }
}
