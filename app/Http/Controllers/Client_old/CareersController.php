<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;


class CareersController extends Controller
{

    public function careers($loc){

        $profile = CompanyProfile::first();


        return view('client.careers', ['profile' => $profile, 'lang' => $loc]);
    }

}
