<?php

namespace App\Http\Controllers\Backend;
use App\Models\Event;
use App\Models\Service;
use App\Models\Team;
use App\Models\User;
use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $events= Event::count();
        $services= Service::count();
        $teams= Team::count();
        $clients= User::count();
        $messages= ContactUs::count();
        return view('admin.layout.home',compact('events','services','teams','clients','messages'));

        
        
    }
}
