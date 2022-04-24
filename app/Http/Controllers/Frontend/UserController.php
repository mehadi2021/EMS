<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Order;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('website.pages.user-registration');

    }
    public function registration(Request $request)
    {
        //validate this request
        // $request->validate([
        //    'username'=>'required',
        //    'email'=>'email|required',
        //    'password'=>'required',
        //    'mobile'=>'required|max:11',
        // ]);

      $a =  User::create([
           'name'=>$request->username,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'mobile'=>$request->mobile,
        ]);

        return redirect()->route('user.login')->with('success','Registration Successful.');



    }
    public function page(){
        return view('website.pages.user-login');

    }

    public function userLogin(Request $request){
        // dd($request->all());
        $userpost= $request->except('_token');
        // dd($userpost);
        // dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            return redirect()->route('user.home')->with('batch','login successful.');
        }
        // else
        // return redirect()->back()->with('error','email not found.');
    }

    public function userLogout(){
        Auth::logout();
        return redirect()->back();
    }

    public function view()
    {
        $lists=Order::where('user_id',auth()->user()->id)->get();
        return view('website.pages.profile',compact('lists'));
    }

    public function orderDetails($id)
    {
        // dd($id);
        $orders = Order::find($id);
        $user = User::find($orders->user_id);
        $details = OrderDetail::with('service')->where('order_id',$id)->get();
            $books=OrderDetail::with('booking')->where('service_id',$id)->get();
        return view('website.pages.orderDetails',compact('user','details','books'));
    }

}
