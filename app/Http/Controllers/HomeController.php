<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function contact(Request $request)
    {
        return view('contact');
    }
    public function contact_mail_send(Request $request)
    {

        Mail::to('mannaisana941@gmail.com')->send(new ContactMail($request));
       return redirect()->back();
    }
}

