<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Alert;

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
        $moreUsers = 'rocketechit.mobile@gmail.com';

        Mail::to($email)->cc($moreUsers)->send( new SendEmail($subject , $message));

        Alert::success('Mail Send', 'E-mail send successfully');
        return back();
    }
}
