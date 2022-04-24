<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Order;
use App\Models\Booking;
use App\Models\OrderDetail;

class CartController extends Controller
{

    public function cart(){
        $carts = session('cart');
        return view('website.pages.cart',compact('carts'));
    }

    public function addToCart($id)
    {
        $service = Service::findorfail($id);
        $cart = session()->has('cart') ? session()->get('cart') : [];
        if (array_key_exists($service->id, $cart)) {

            $cart[ $service->id]['quantity']++;
            $cart[ $service->id]['total_price'] = ((int)$cart[$service->id]['quantity'] * (float)$cart[$service->id]['unit_price']);

        } else {
            $cart[$service->id] = [
                'service_id' => $service->id,
                'name' => $service->name,
                'quantity' => 1,
                'unit_price' => $service->price,
                'total_price' => ((float)$service->price) * 1,
            ];
        }

        session(['cart' => $cart]);
        return redirect()->back();
    }


    public function updateCart(Request $request)
    {
        // dd($request->all());
        $id = $request->input('cart_id');
        $cart = \session()->get('cart');
        // dd($cart);
        $cart[$id]['quantity'] = $request->input('quantity');
        $cart[$id]['total_price'] = ($cart[$id]['quantity'] * $cart[$id]['unit_price']);
        \session()->put('cart', $cart);
        return redirect()->back();
    }

    public function destroy()
    {
        \session()->forget('cart');
        return redirect()->back();
    }

    // public function updateCart(Request $request){

    //     dd ($request->all());
    // }

    public function checkout()
    {

        $cart = \session()->get('cart');

        if($cart){
            $order=Order::create([
                'user_id'=>auth()->user()->id,
                'total_price'=>array_sum(array_column($cart, 'total_price')),

        ]);

        //insert details into order details table
        foreach ($cart as $cart){
            OrderDetail::create([
                'order_id'=>$order->id,
                'service_id'=>$cart['service_id'],
                'quantity'=>$cart['quantity'],
                'unit_price'=>$cart['unit_price'],
                'sub_total'=>$cart['quantity']*$cart['unit_price'],
            ]);
        }

        session()->forget('cart');
        return redirect()->back()->with('message','Order Placed Successfully.');
        // return view('admin.layout.invoice');

    }

       return redirect()->back()->with('message', 'No Data Found');
    }


    public function delete($id)
    {
        $carts = session('cart');
        unset($carts[$id]);
        session()->put('cart',$carts);
        return redirect()->back()->with('message', 'cart deleted');
    }

}