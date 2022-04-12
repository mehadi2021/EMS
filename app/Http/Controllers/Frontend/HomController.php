<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomController extends Controller
{
    public function home()
    {
        return view('website.master');
    }
}
