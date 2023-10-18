<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;
use App\Models\FormData; 

class HomeController extends Controller
{
    //
    public function home()
    {
        return view('master.home');
    }

    public function support()
    {
        return view('master.support');
    }
    public function contact_mail_send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'number' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            'file' => 'file|mimes:pdf',
        ]);

        $formData = FormData::create([
            'name' => $validated['name'],
            'number' => $validated['number'],
            'email' => $validated['email'],
            'message' => $validated['message'],
            'file' => $request->file('file')->store('uploads'), 
        ]);
        
        Mail::to('support@currenttech.pro')->send(new ContactMail($request));
        return redirect('support')->with('success', 'Contact form submitted successfully.');
    }
}
