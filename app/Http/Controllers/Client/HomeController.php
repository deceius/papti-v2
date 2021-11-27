<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\CompanyHistory;
use App\Models\CompanyProfile;

class HomeController extends Controller
{

    public function index($loc){
        $banners = Banner::all();
        return view('client.index', ['banners' => $banners, 'lang' => $loc]);
    }

    public function about($loc){

        $profile = CompanyProfile::first();
        $history = CompanyHistory::all();
        return view('client.about', ['profile' => $profile, 'history' => $history, 'lang' => $loc ]);
    }
}
