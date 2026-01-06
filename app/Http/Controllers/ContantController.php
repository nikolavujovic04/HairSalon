<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContantController extends Controller
{
    
    public function sendEmail(Request $request){
        $validatedData = $request->validate([
            "name" => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Mail::to('nikolavujovickv@gmail.com')->send(new MailClass($validatedData));
        return back()->with('success','Thanks for contacting us, we will get back to you soon!');
    }
}
