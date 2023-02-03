<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function save_subscription(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required | email'
        ], [
            'email.required' => 'Please enter your email address to subscribe.',
            'email.email' => 'Please provide valid email address.'
        ]);
        Subscription::create([
            'email' => $request->email,
        ]);
        return response('Thank You for Subsctiption', 202);
    }
    public function save_appointment(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'service' => 'required',
            'cleaner' => 'required',

        ], [
            'name.required' => "Name required",
            'phone_number.required' => "Phone Number required",
            'service.required' => "Service required",
            'cleaner.required' => "Cleaner required",
        ]);
        Enquiry::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'is_deleted' => 0,
        ]);

        return response('Appointment Booked. Someone will call you for further process.', 202);
    }
    public function save_enquiry(Request $request)
    {
        $validate = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ], [
            'full_name.required' => 'Name Required',
            'email.required' => 'Email Required',
            'subject.required' => 'Subject Required',
            'message.required' => 'Message Required',
        ]);
        $arr = explode(' ', $request->full_name);
        $first_name = $arr[0]??'';
        $last_name = $arr[1]??'';
        Enquiry::create([
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'is_deleted' => 0,
        ]);
        return response('Enquiry Booked. Someone will call you for further process.', 202);
    }
}
