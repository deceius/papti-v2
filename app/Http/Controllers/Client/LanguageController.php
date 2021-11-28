<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function change($loc, $page){
        return redirect($loc.'/'.str_replace('_', '/' ,$page));
    }
}
