<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Event;
class ServiceController extends Controller
{
    public function create()
    {
         $events = Event::orderBy('id','desc')->get();

        return view ('admin.layout.service',compact('events'));
    }

    public function store(Request $request)
    {

        // $validated = $request ->validate
        // ([
        //     'name'=>'required',
        //    'description' =>'required',
        //    'image' =>'required',
        //     'guest'=>'required|min:100|max:1500',
        //    'price' =>'required',


        // ]);



       // dd($request->all());
         $filename="";





            if($request->hasFile('image'))
            {
                $file= $request->file('image');
                $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads', $filename);
            }

        Service::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'status'=>$request->status,
            'event_id'=>$request->event_id,
            'image'=>$filename






        ]);
        return redirect()->back();
    }

    public function list()
    {
        $lists=service::all();

        return view('admin.layout.service-list',compact('lists'));

    }
    public function view($id)
    {
        $list=service::find($id);

        return view('admin.layout.service-view',compact('list'));

    }
    public function delete($id)
    {
        $lists=Service::find($id);
        $lists->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $events=Event::all();
        $list=Service::find($id);
        return view('admin.layout.edit-service',compact('list','events'));
    }
    public function update(Request $request,$id)
    {

        $filename="";


        // dd($request->all());




             if($request->hasFile('image'))
             {
                 $file= $request->file('image');
                 $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                 $file->storeAs('/uploads', $filename);
             }

        $list=Service::find($id);
       $list->update([
        'name'=>$request->name,
        'description'=>$request->description,
        'price'=>$request->price,
        'status'=>$request->status,
        'event_id'=>$request->event_id,
        'image'=>$filename
    ]);
    return redirect()->back()->with('message','Team Member Update in Successfully!');
}



}