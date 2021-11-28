<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\CertificationPolicy;
use App\Models\CompanyHistory;
use App\Models\CompanyProfile;
use App\Models\PresidentMessage;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index($loc){
        $banners = Banner::all();
        return view('client.index', ['banners' => $banners, 'lang' => $loc]);
    }

    public function about($loc){
        $profile = CompanyProfile::first();
        $policy = CertificationPolicy::first();
        $pres_message = PresidentMessage::first();
        $history = CompanyHistory::all();
        return view('client.about', [
            'profile' => $profile,
            'policy' => $policy,
            'pres_message' => $pres_message,
            'history' => $history,
            'lang' => $loc ]);
    }

    public function product_types($loc){

    }

    public function product_type($loc){

    }

    public function product($loc){

    }

    public function recruitment($loc){

    }

    public function contact($loc){

    }
}
