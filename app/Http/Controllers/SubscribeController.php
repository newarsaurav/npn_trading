<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function save_subscription(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required | email'
        ],[
            'email.required' => 'Please enter your email address to subscribe.',
            'email.email' => 'Please provide valid email address.'
        ]);

       return response('Thank You for Subsctiption' ,202) ;
    }
    public function save_appointment(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'phone_number'=> 'required',
            'service'=> 'required',
            'cleaner'=> 'required',

        ],[
            'name.required' => "Name required",
            'phone_number.required' => "Phone Number required",
            'service.required' => "Service required",
            'cleaner.required' => "Cleaner required",
        ]);

        return response('Appointment Booked. Someone will call you for further process.', 202);
    }
}
