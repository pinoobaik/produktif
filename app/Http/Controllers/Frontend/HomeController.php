<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Perbaikan syntax "use"

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home'); // Pastikan file ini ada di resources/views/frontend/home.blade.php
    }
}
