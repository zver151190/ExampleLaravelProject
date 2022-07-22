<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Helpers\YahooShopping;
use App\Helpers\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StoreController extends Controller
{
    
    public function product($store,$id)
    {
        $shop = false;
        if($store == "yahooshopping") $shop = new YahooShopping();
        if($shop){
            $product = $shop->getProduct($id);
            $data = array(
                "store" => $store,
                "id"    => $id,
                "product" => $product,
            );
            return view('front.product')->with($data);
        }
        return view('front.home');
    }

    public function search($store,Request $request)
    {
        $shop = false;
        if($store == "yahooshopping") $shop = new YahooShopping();
        if($shop){
            $products = $shop->getProducts($request);
            $data = array(
                "store" => $store,
                "products" => $products,
            );
            return view('front.search')->with($data);
        }
        return view('front.home');
    }

}