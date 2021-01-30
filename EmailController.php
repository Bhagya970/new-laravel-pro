<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;
use UxWeb\SweetAlert\SweetAlert;


class EmailController extends Controller
{
    function index()
    {
        return view('emailsend');
    }

    function send(Request $request)
    {   

        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
        // 'document' => 'required'
        ]);

        // if ($document->getError() == 1) {
        //     $max_size = $document->getMaxFileSize() / 1024 / 1024;  // Get size in Mb
        //     $error = 'The document size must be less than ' . $max_size . 'Mb.';
        //     return redirect()->back()->with('flash_danger', $error);
        // }

        $data = array(
            'name' => $request->name,
            'message' => $request->message,
            // 'document' => $request->file('document')


        );

        Mail::to('gandhambhagya98@gmail.com')->cc('bhagyalakshmigandham@gmail.com')   
        ->send(new sendingEmail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }

}