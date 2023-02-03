<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\Subscription;
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
    public function subscription(Request $request)
    {
        $subscription = Subscription::where('is_deleted',0)->latest()->get();
        return view("admin.dashboard.subscription",compact('subscription'));
    }
    public function enquiry(Request $request)
    {
        $enqs = Enquiry::where('is_deleted',0)->latest()->get();
        return view("admin.dashboard.enquiry",compact('enqs'));
    }

}
