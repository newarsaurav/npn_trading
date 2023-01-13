<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        return view("admin.login");
    }
    public function signup(Request $request)
    {
        return view("admin.signup");
    }
    public function dashboard(Request $request)
    {
        return view("admin.dashboard.dashboard");
    }
    public function profile(Request $request)
    {
        return view("admin.dashboard.profile");
    }
}
