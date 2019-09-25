<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendeMail(Request $get)
    {

//        dd($get);

        $this->validate($get, [
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'message' => 'required|min:10'
        ]);

        $email = $get->email;
        $subject = $get->subject;
        $message = $get->message;

        Mail::to($email)->send( new SendEmail($subject , $message));

        return back();
    }
}
