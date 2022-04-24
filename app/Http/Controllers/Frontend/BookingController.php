<?php

namespace App\Http\Controllers\frontend;
use App\Models\Booking;
use App\Models\Service;
use App\Models\Event;
use App\Models\Team;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
        public function budget($id)
    {
                 $events=Event::find($id);
                 $services=Service::where('event_id',$id)->get();;
        return view('website.pages.budget',compact('events','services'));
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



    //    dd($request->all());
        //  $filename="";





        //     if($request->hasFile('image'))
        //     {
        //         $file= $request->file('image');
        //         $filename= date ('Ymdhms').'.'.$file->getClientOriginalExtension();
        //         $file->storeAs('/uploads', $filename);
        //     }

        Booking::create([
              'name'=>$request->name,
              'service'=>$request->service,
              'venue'=>$request->venue,
              'venue1'=>$request->venue1,
              'guest'=>$request->guest,
            'date'=>$request->date,
            'start'=>$request->start,
            'end'=>$request->end

        ]);
        return redirect()->route('booking.c_booking');
    }
    public function confirm_booking()
    {
          $services=Service::all();
             return view ('website.pages.confirm-booking',compact('services'));
    }
     public function team($id)
    {
          $lists=Team::where('work',$id)->get();
             return view ('website.pages.team-view',compact('lists'));

   }

     public function booking_list($id)
    {
          $lists=Booking::where('name',$id)->get();
             return view ('website.pages.booking-list',compact('lists'));

   }



}