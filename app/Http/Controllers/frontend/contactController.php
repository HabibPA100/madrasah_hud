<?php

namespace App\Http\Controllers\frontend;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }
    public function store(Request $request)
    {
        // Validate the form data
     $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Store data in the database
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);

        // Redirect or return a success message
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
