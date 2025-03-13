<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Pastikan hanya user yang sudah login bisa mengakses dashboard
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.dashboard'); // Pastikan view ini ada di resources/views/backend/dashboard.blade.php
    }
}
