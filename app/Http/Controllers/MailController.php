<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mailform()
    {
        return view('contact');
    }
    public function maildata(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $sub = $request->sub;
        $mess = $request->mess;
        $mailData = [
            'url' => 'www.meteostanice.sk',
        ];
        $send_mail = "2karolsugar@gmail.com";
        Mail::to($send_mail)->send(new SendMail($name, $email, $sub, $mess));
        return "Poslane!";
    }
}
