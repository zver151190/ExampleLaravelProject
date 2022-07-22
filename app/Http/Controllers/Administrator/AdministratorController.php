<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{

    public function administrator()
    {
        if (Auth::user()->permission === 1) {
            return view('administrator.administrator');
        } else {
            return redirect('home');
        }
    }

    public function moderator()
    {
        if (Auth::user()->permission === 2) {
            return view('administrator.moderator');
        } else {
            return redirect('home');
        }
    }

    public function storekeeper()
    {
        if (Auth::user()->permission === 3) {
            return view('administrator.storekeeper');
        } else {
            return redirect('home');
        }
    }
}
