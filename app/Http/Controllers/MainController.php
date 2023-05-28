<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('frontend.welcome');
    }

    public function customerDashboard(){
        return view('dashboard.customer');
    }
}
