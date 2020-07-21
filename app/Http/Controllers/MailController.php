<?php

namespace App\Http\Controllers;

use App\Mail\NotificationMail;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function send()
    {
        $user = Auth::user();

        //Mail::to("abiolafakorede@gmail.com")->send(new NotificationMail($user));
        Mail::to("it@armpension.com")->send(new NotificationMail($user));

        return redirect('/home')->with('message', 'Notification mail has been successfully sent!');
    }
}
