<?php

namespace App\Http\Controllers\Backend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    // public function report(Request $request)
    // {
    //     return view('admin.layout.report');
    // }

    public function reportsearch(Request $request){
  
        $orders = Order::whereBetween('created_at',[$request->from,$request->to])->get();
        // dd($orders);
        return view('admin.layout.report',compact('orders'));
    }
}
