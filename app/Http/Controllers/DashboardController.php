<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.layout.main');
    }

    public function profile(){
        return view('backend.content.profile');
    }
}
