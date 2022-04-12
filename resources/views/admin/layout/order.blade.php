@extends('admin.master')

@section('content')



  

    <h1>Order List</h1>

   

    <table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">User Id</th>
        <th scope="col">Total Price</th>
        <th scope="col">Action</th>

    
        

        
    </tr>
    </thead>
    <tbody>
    <tr>
    <tbody>
        @foreach($orders as $key=> $list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->user_id}}</td>
        <!-- <td>{{$list->type}}</td> -->
        <td>{{$list->total_price}}</td>
      
        <td>
        <a class="btn btn-primary" href="{{route('order.view',$list->id)}}">View</a>
        </td>

        
        
    </tr>
        @endforeach
    </tbody>
        

        
    </tr>
      
    </tbody>
</table>
@endsection