<?php

namespace App\Http\Controllers\Backend;
use App\Models\Image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function create()
    {
        return view ('admin.layout.create-gallery');
    }
    public function store(Request $request)
    {

        
       // dd($request->all());
         $filename="";
       

    


            if($request->hasFile('image'))
            {
                $file= $request->file('image');
                $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('/uploads', $filename);
            }

        Image::create([
            
            'image'=>$filename,
         
            'imagetype'=>$request->name
            
            
            

        ]);
        return redirect()->back();
    }
    public function image()
    {
        $images=Image::all();
        return view ('admin.layout.image',compact('images'));
    }
    public function show()
    {
        
        $images= Image::all();
        //dd($lists);
        return view('website.pages.gallery',compact('images'));
    }
}
