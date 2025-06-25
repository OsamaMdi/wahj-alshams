<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
            'phone' => 'nullable|string',
        ]);

        Mail::to('cezo383907@gmail.com')->send(new ContactMessageMail($data));

        return back()->with('success', 'تم إرسال رسالتك بنجاح!');
    }
}
