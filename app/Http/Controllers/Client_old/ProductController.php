<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;


class ProductController extends Controller
{

    public function product($loc){

        $products = Product::all();
        $product_type = ProductType::all();


        return view('client.product-types', ['product_types' => $product_type, 'lang' => $loc ]);
    }

    public function product_type($loc, $id){

        $products = Product::where(['product_types_id' => $id])->get();
        return view('client.product', ['products' => $products, 'lang' => $loc ]);
    }

    public function view($loc, $id){
        $product = Product::find($id);
        return view('client.product-view', ['product' => $product, 'lang' => $loc]);
    }
}
