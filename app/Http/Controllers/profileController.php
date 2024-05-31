<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tendik;


class profileController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
