<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Payment;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment($order_id)
    {
   
        // dd($id);
        $order = Order::find($order_id);  
       $total=$order->total_price;
       $need_to_pay=($order->total_price*10)/100;
        return view('website.pages.payment',compact('total','need_to_pay'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Payment::create([
            
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'amount'=>$request->amount,
            'trxid'=>$request->trxid,
            'location'=>$request->location
            
            
            

        ]);
        return redirect()->back();
    }

    public function view()
    {
        $lists=Payment::all();
        
        return view('admin.layout.payment-view',compact('lists'));
    }
}
