<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Nexmo\Laravel\Facade\Nexmo;
use UxWeb\SweetAlert\SweetAlert;


class SmsController extends Controller
{
    function index()
    {
        return view('sms');
    }
    public function sendmessage(Request $request){
        // return 'running';
        Nexmo::message()->send([
            'to'   => '91'. $request->mobile,
            'from' => 'Vonage APIs',
            'text' => ''.$request->message
            
        ]);
        return back()->with('success', 'Message sent!');

        // return redirect('/');
        //  echo "message sent successfully";
    }
}
