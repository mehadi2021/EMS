<?php

namespace App\Http\Controllers\Backend;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function orderDetails($id)
    {
        // dd($id);
        $orders = Order::find($id);
        $user = User::find($orders->user_id);
        $details = OrderDetail::with('service')->where('order_id',$id)->get();
        return view('admin.layout.invoice',compact('user','details'));
    }

    public function invoice()
    {
        return view ('admin.layout.invoice');

    }
}
