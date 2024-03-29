<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Response;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AllController extends Controller
{
    public function index(){
        return view('home');
    }

    public function cer(){
        return view('Certificates');
    }

    public function downloadcv(){

        $filepath = public_path('img/Malik-Alnabouli-CV.pdf');
        return Response::download($filepath); 

        // return response()->download(public_path('img'.'\Malik-CV.pdf'), 'Malik-Alnabouli-CV.pdf');
    }

    public function send(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = request()->all();
        Mail::to('maleknp127@gmail.com')->send(new ContactMail($data));
        return redirect()->route('home')->with('success', 'Your Message has been Send, Thanks for contacting me! ');
    }
}
