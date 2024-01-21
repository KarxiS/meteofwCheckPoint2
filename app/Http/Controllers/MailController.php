<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\CustomMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:mail-send', ['only' => ['maildata']]);
    }


    public function mailform()
    {
        return view('contact');
    }
    public function maildata(Request $request)
    {
        $logoHorePic = "https://i.imgur.com/4jMjqHC.png";
        $logoHoreOdkaz = url('/');
        $nadpis = $request->nadpis;
        $text1 = $request->text1;
        $text2 = $request->text2;
        $text3 = $request->text3;
        $footerLavo1 = "Meteo s.r.o.";
        $footerLavo2 = "UNIZA";
        $footerLavo3 = "Slovakia";
        $footerLavo4 = "";
        $footerPravo1 = "";
        $footerPravo2Odkaz = url('/');

        $footerPravo2Text = config('app.name');
        $mailData = [
            'url' => 'www.meteostanice.sk',
        ];
        $send_mail = "2karolsugar@gmail.com";
        Mail::to($send_mail)->send(new CustomMail($logoHoreOdkaz, $logoHorePic, $nadpis, $text1, $text2, $text3, $footerLavo1, $footerLavo2, $footerLavo3, $footerLavo4, $footerPravo1, $footerPravo2Odkaz, $footerPravo2Text));
        return "Poslane!";
    }
}
