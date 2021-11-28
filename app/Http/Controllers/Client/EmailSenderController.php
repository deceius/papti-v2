<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class EmailSenderController extends Controller
{
    public function sendEmail(Request $request) {

        $data = array(
            'name'=> $request->name,
            'company'=> $request->company,
            'email'=> $request->email,
            'contact'=> $request->contact,
            'type'=> $request->type,
            'details'=> $request->details
        );

        Mail::send('mail.contact', $data, function($message) use ($data) {
           $message->to('julius.decena3095@gmail.com', 'Papti Admin')->subject
              ('['.$data['type'].']Papti Contact Message - '.$data['email']);
           $message->from('webmailer@papti.com','Papti Webmailer');
        });
     }
}
