@extends('website.master')

@section('content')
<style>
    .h1{
        color:white;
        margin-left:620px;
        margin-top:50px;
        margin-bottom:100px;

    }

</style>

<head>

<meta name="viewport" content= "width = device-width, initial-scale = 1.0">
</head>


<h2 style="text-align:center; color:white; font-size:40px"><span>User Information</span></h2>
<br><br>

<div class="h1">
    <h1 >Name: {{auth()->user()->name}}</h1>
    <h1 >Email: {{auth()->user()->email}}</h1>
    <h1 >Phone Number: {{auth()->user()->mobile}}</h1>
</div>



<div class="container" style="margin-bottom: 100px;">
<h1 style="color:white; padding-bottom: 30px; font-size: 35px; text-align:center;" >Your Order</h1>



<table class="table">
<thead>
<tr>
    <th scope="col" style="color:white; font-size: 20px;" >Serial</th>
    <th scope="col" style="color:white; font-size: 20px;" >User Id</th>
    <th scope="col" style="color:white; font-size: 20px;" >Total Price</th>
    <th scope="col" style="color:white; font-size: 20px;" >Action</th>

</tr>
</thead>
<tbody>
<tr>
<tbody>
    @foreach($lists as $key=>$list)

<tr>
    <th scope="row" style="color:white; font-size: 20px;" >{{$key+1}}</th>
    <td style="color:white; font-size: 20px;" >{{$list->user_id}}</td>

    <td style="color:white; font-size: 20px;" >{{$list->total_price}}</td>

    <td>
    <a class="btn btn-primary" href="{{route('orderView',$list->id)}}">View</a>
    </td>



</tr>
    @endforeach
</tbody>
</table>

</div>


@endsection
