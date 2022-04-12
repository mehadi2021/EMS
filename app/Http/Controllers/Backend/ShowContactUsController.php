<?php

namespace App\Http\Controllers\Backend;
use App\Models\ContactUs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowContactUsController extends Controller
{
    public function message_view()
    {
         $contacts = ContactUs::all();
        return view ('admin.layout.contact',compact('contacts'));
    }

// public function store(Request $request)
// {
//     dd($request->all());
//     try{
//         ContactUs::create([
//         'name'=>$request->name,
//         'email'=>$request->email,
//         'number'=>$request->number,
//         'subject'=>$request->subject,
//         'message'=>$request->message,

//         ]);

//         return redirect()-> route('Contact_Us')->with('success','Message Sent Successfully');

//     }

//     catch(Throwable $throw)
//     {
//         return redirect()->back()->with('error','Sorry, Message not send!!!');
//     }
// }




public function delete($id)
{
     $deletes = ContactUs::find($id);
     $deletes->delete();
     return redirect()->back();
}


}
