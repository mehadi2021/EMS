<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Service;

class PagesController extends Controller
{
    public function home()
    {
    return view('website.pages.home');
    }
    public function marriage()
    {
    return view('website.pages.marriage');
    }
    public function birthday()
    {
    return view('website.pages.birthday');
    }
    public function office()
    {
    return view('website.pages.office');
    }




    public function eventWiseService($id)
    {
        $services = Service::where('event_id',$id)->get();
        return view('website.pages.show-service',compact('services'));
    }
   
   
}
