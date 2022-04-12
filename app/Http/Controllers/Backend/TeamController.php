<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function create()
    {
        return view('admin.layout.team');
    }

    public function store(Request $request)
    {
        
        $validated = $request ->validate
        ([
            'name'=>'required',
           'age' =>'required',
           'gender' =>'required',
            'nid'=>'required|min:8|max:13',
           'address' =>'required',
            'phone' =>'required|min:11|max:11',
           'responsibility' =>'required',
          
        ]);


        
        $filename="";
         
        
        // dd($request->all());
 
     
 
 
             if($request->hasFile('image'))
             {
                 $file= $request->file('image');
                 $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                 $file->storeAs('/uploads', $filename);
             }

        Team::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'gender'=>$request->gender,
            'nid'=>$request->nid,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'responsibility'=>$request->responsibility,
            'image'=>$filename

        ]);
        return redirect()->back()->with('message','Team Member Added in Successfully!');;
    }


    public function list()
    {
        $lists=Team::all();

        return view('admin.layout.team-list',compact('lists'));

    }

    public function delete($id)
    {
        $lists=Team::find($id);
        $lists->delete();
        return redirect()->back();
    }
    public function detail($id)
    {
        $lists=Team::find($id);
        return view('admin.layout.team-details',compact('lists'));
    }
    public function edit($id)
    {
        $list=Team::find($id);
        return view('admin.layout.edit-team',compact('list'));
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

        $list=Team::find($id);
       $list->update([
        'name'=>$request->name,
        'age'=>$request->age,
        'gender'=>$request->gender,
        'nid'=>$request->nid,
        'address'=>$request->address,
        'phone'=>$request->phone,
        'responsibility'=>$request->responsibility,
        'image'=>$filename

    ]);
    return redirect()->back()->with('message','Team Member Update in Successfully!');
}
    }

