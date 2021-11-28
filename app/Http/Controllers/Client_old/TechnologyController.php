<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technology;


class TechnologyController extends Controller
{

    public function technology($loc){

        $technology = Technology::all();

        return view('client.technology', ['technology' => $technology, 'lang' => $loc]);
    }

}
