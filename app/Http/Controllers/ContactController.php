<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'messages' => 'required|string',
        ]);

        $data = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'messages' => $validatedData['messages'],
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('joe.k659@gmail.com')
                ->subject('Contact Form Submission from ' . $data['name']);
        });

        return redirect()->route('contact.form')->with('success', 'Message sent successfully!');
    }
}
