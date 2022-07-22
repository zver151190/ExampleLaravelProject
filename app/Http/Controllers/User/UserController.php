<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function about()
    {
        return view('front.about');
    }

    public function addresses()
    {
        return view('front.addresses');
    }

    public function payments()
    {
        return view('front.payments');
    }

    public function help()
    {
        return view('front.help');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function favorites()
    {
        return view('front.favorites');
    }

    public function cart()
    {
        return view('front.cart');
    }

    public function orders()
    {
        return view('front.orders');
    }

    public function profile()
    {
        return view('front.profile');
    }

    public function search()
    {
        return view('front.search');
    }

    public function catalog()
    {
        return view('front.catalog');
    }

    public function unit()
    {
        return view('front.unit');
    }

}
