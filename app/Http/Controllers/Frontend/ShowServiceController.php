<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowServiceController extends Controller
{
    public function view()
    {
    return view('website.pages.ShowService');
    }
}
