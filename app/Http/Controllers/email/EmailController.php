<?php

namespace App\Http\Controllers\email;

use App\Models\Contactu;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Subject' => 'required',
            'Message' => 'required'
        ]);

     $mail = Contactu::create([
        'name' => $request->Name,
        'email' => $request->Email,
        'subject' => $request->Subject,
        'message' => $request->Message
     ]) ;

    $toEmail = 'manishsingh25061997@gmail.com';
    $subject = 'Someone has connected with your Manish Portfolio .';
    $name = $request->Name;
    $email = $request->Email;
    $sub = $request->Subject;
    $message = $request->Message;

    $req = Mail::to($toEmail)->send(new WelcomeEmail($message, $subject, $name, $email, $sub));
    // dd($req);

    if($mail)
    {
        return redirect()->route('home')->with('mailSended', 'Successfully Send Mail.');
    }
    else
    {
        return redirect()->route('home')->with('mailSendedFailed', "Something seems to have gone wrong.");
    }
    }
}
