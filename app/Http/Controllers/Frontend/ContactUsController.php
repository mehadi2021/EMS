<?php

namespace App\Http\Controllers\Frontend;
use App\Models\ContactUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('website.pages.contact-us');
    }

    public function store(Request $request)
{
    // dd($request->all());
    
        ContactUs::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'number'=>$request->number,
        'subject'=>$request->subject,
        'message'=>$request->message,

        ]);

         return redirect()->back()->with('success','Message Sent Successfully');

}
}
