<?php

namespace App\Http\Controllers\Backend;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function OrderView()
    {
       $orders=Order::all();

        return view ('admin.layout.order',compact('orders'));
    }
}
