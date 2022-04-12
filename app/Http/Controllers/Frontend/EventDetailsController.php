<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventDetailsController extends Controller
{
    public function create()
    {
        return view('website.pages.events');
    }

    public function show()
    {
        
        $lists= Event::all();
        //dd($lists);
        return view('website.pages.show-event',compact('lists'));
    }

}