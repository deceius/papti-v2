<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyHistory;
use App\Models\CompanyProfile;


class AboutController extends Controller
{

    public function about(){

        $profile = CompanyProfile::findOrFail(1);
        $history = CompanyHistory::all();


        return view('client.about', ['profile' => $profile, 'history' => $history ]);
    }
}
