<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    public function create()
    {
        return view('website.pages.Special');
    }
}
