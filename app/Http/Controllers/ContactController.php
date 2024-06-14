<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required|min:4|max:255",
            'email' => "required|min:4|max:255",
            "phoneNumber" => "required|min:8|max:16",
            "message" => "required|min:10|max:255",
        ]);

        Mail::to("Reyyy0207@gmail.com")->send(new ContactMessage($validated));

        flash()->success('Message sent successfully.');

        return to_route(".index");
    }
}
