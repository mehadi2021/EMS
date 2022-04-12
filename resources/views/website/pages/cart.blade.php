@extends('website.master')

@section('content')


<style>
div.gallery {
  border: 1px solid #ccc;
  text-align:center;
}
div.gallery:hover {
  border: 1px solid #777;
}
div.gallery img {
  width: 360px;
  height: 310px;
}
div.desc {
  padding: 15px;
  text-align: center;
}
* {
  box-sizing: border-box;
}
.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}
@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}
@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<h2 style="text-align:center; color:black; font-size:40px">Cart List</h2>
<br><br>

<head>
    <!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- <JavaScript Bundle with Popper> -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<div class="container" style="margin-bottom: 30px;">
<h5 class="card-title"></h5>



<table class="table">
    <thead>
    <tr>
        <th scope="col" style="color:black; font-size:15px" >Serial</th>
        <th scope="col" style="color:black; font-size:15px">Name</th>
        <!-- <th scope="col">Event Type</th> -->
        <th scope="col" style="color:black; font-size:15px">Quantity</th>
        <th scope="col" style="color:black; font-size:15px">Price</th>
        <th scope="col" style="color:black; font-size:15px">Subtotal</th>
    </tr>
    </thead>
    <tbody>

    @php

    $total = 0;
    @endphp

    @if(isset($carts))
        @foreach($carts as $key=> $list)

    <tr style="color:black; font-size:15px">
        <th scope="row">{{$loop->iteration}}</th>
        <td >{{$list['name']}}</td>
        <td>
      <form action="{{route('updateCart')}}" method="post">
        @csrf 
        <input type="hidden" value="{{$key}}" name="cart_id">
        <input type="number" value="{{$list['quantity']}}" name='quantity' min="1" oninput="this.value = Math.abs(this.value)">
        <button class="btn btn-primary" style=" margin-left: 70px; height: 35px"
          type="submit">update
        </button>
      </form>

        </td>
        <td>{{$list['unit_price']}}</td>
        <td>{{$list['unit_price'] * $list['quantity']}}</td>
        <td><a href="{{route('cart.clear',$key)}}">Delete</a></td>  
    </tr>

    @php

        $total = $total+($list['unit_price'] * $list['quantity'])
    @endphp

        @endforeach

        @else

        <div><h1>Your cart is empty</h1></div>

        @endif
    </tbody>
</table>


<div style="color:black; font-size:20px; float: right; padding-right: 200px;">Total : {{$total}}</div>


<div style="display: flex; ">
  <div style="padding-right: 20px; "><a style="font-size: 20px;" href="{{route('cart.checkout')}}" class="btn btn-success">CheckOut</a></div>


<div><a style="font-size: 20px;" href="{{route('cart.delete')}}" class="btn btn-danger">Clear</a></div>
</div>

</div>



@endsection