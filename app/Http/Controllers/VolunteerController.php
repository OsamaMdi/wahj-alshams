<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\VolunteerApplicationMail;
use Illuminate\Support\Facades\Mail;

class VolunteerController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'age' => 'required|integer',
            'volunteerPeriod' => 'required|string',
            'whyVolunteer' => 'required|string',
        ]);

        Mail::to('cezo383907@gmail.com')->send(new VolunteerApplicationMail($data));

        return back()->with('success', 'Application sent successfully!');
    }
}
