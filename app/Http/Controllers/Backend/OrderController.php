<?php

namespace App\Http\Controllers\Backend;
use App\Models\Order;
use App\Models\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderView()
    {
       $orders=Order::all();

        return view ('admin.layout.order',compact('orders'));
    }
     public function BookingInfo()
    {
       $lists=Booking::all();

        return view ('admin.layout.booking-info',compact('lists'));
    }


}