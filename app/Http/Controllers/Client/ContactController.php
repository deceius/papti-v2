<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class ContactController extends Controller
{


    public function contact($loc){

        $profile = CompanyProfile::first();
        return view('client.contact', ['profile' => $profile, 'lang' => $loc ]);
    }
}
