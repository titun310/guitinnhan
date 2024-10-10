<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Trả về view 'dashboard'
        return view('sub.dashboard'); // Đảm bảo rằng bạn có view 'dashboard'
    }
}