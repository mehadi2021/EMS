<?php

namespace App\Http\Controllers\Backend;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class EventController extends Controller
{
    public function create()
    {
        return view ('admin.layout.event');
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

        Event::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'venue'=>$request->venue,
            'image'=>$filename
            
            
            

        ]);
        return redirect()->back();
    }

    public function list()
    {
        $lists=Event::all();
        return view ('admin.layout.event-list',compact('lists'));
    }
    public function delete($id)
    {
        $lists=Event::find($id);
        $lists->delete();
        return redirect()->back();
    }
    public function detail($id)
    {
        $lists=Event::find($id);
        return view('admin.layout.event-details',compact('lists'));
    }
    public function search()
    {
        $list=request()->search;
        // dd($list);
        $lists=Event::where('name','LIKE',"%{$list}%")->get();
       
        return view('admin.layout.event-search',compact('lists'));
    }
    public function edit($id)
    {
        $list=Event::find($id);
        // dd($list);
       
        return view('admin.layout.event-edit',compact('list'));
    }
    public function update(Request $request,$id)
    {
        $list=Event::find($id);
        // dd($list);
       
        $filename="";
       if($request->hasFile('image'))
            {
                $file= $request->file('image');
                $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads', $filename);
            }

        $list->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'image'=>$filename

        ]);
        return redirect()->route('event.list');
    }

}