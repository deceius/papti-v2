<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\CertificationPolicy;
use App\Models\CompanyHistory;
use App\Models\CompanyProfile;
use App\Models\PresidentMessage;
use App\Models\Product;
use App\Models\ProductApplication;
use App\Models\Recruitment;
use App\Models\Technology;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LandingPageController extends Controller
{

    function saveLocationStats(){
        $location = Location::get();
        $visitor = Visitor::firstOrNew(['country_code' => $location->countryName]);
        $visitor->count++;
        $visitor->save();

    }

    public function index($loc){

        $this->saveLocationStats();
        $banners = Banner::all();
        $product_type = ProductApplication::all();
        return view('client.index', ['product_types' => $product_type, 'banners' => $banners, 'lang' => $loc]);
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

    public function technology($loc){

        $technology = Technology::all();
        return view('client.technology', ['technology' => $technology, 'lang' => $loc]);
    }

    public function products($loc){
        $product_type = ProductApplication::all();
        return view('client.product-types', ['product_types' => $product_type, 'lang' => $loc ]);
    }

    public function product_application($loc, $id){
        $products = Product::where(['product_application_id' => $id])->get();
        return view('client.product', ['id' => $id, 'products' => $products, 'lang' => $loc ]);
    }

    public function product($loc, $id){
        $product = Product::find($id);
        return view('client.product-view', ['id' => $id, 'product' => $product, 'lang' => $loc]);
    }

    public function recruitment($loc){
        $recruitment = Recruitment::first();


        return view('client.careers', ['recruitment' => $recruitment, 'lang' => $loc]);
    }

    public function contact($loc){
        $profile = CompanyProfile::first();
        return view('client.contact', ['profile' => $profile, 'lang' => $loc ]);
    }
}
