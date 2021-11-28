<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Mail;

class EmailSenderController extends Controller
{
    public function sendEmail(Request $request) {
        $receipient = "";
        $companyProfile = CompanyProfile::first();

        $data = array(
            'name'=> $request->name,
            'company'=> $request->company,
            'email'=> $request->email,
            'contact'=> $request->contact,
            'type'=> $request->type,
            'details'=> $request->details
        );

        if ($request->type == 'PRODUCT'){
            $receipient = $companyProfile->email_sales;
        }
        elseif ($request->type == 'RECRUITMENT'){
            $receipient = $companyProfile->email_hr;
        }
        else {
            $receipient = $companyProfile->email_company;
        }

        Mail::send('mail.contact', $data, function($message) use ($data, $receipient) {
           $message->to($receipient, 'Papti Admin')->subject
              ('['.$data['type'].']Papti Contact Message - '.$data['email']);
           $message->from('webmailer@papti.com','Papti Webmailer');
        });
     }
}
