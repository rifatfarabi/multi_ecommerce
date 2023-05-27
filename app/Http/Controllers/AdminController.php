<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminLogin(){
        return view('auth.admin_login');
    }

    public function adminDashboard(){
        return view('dashboard.admin');
    }
}
