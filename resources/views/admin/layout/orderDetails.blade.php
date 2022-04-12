@extends('admin.master')

@section('content')



  

    <h1>Order Details</h1>

   

    <table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Order Id</th>
        <th scope="col">Service Id</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Sub Total</th>

    
        

        
    </tr>
    </thead>
    <tbody>
    <tr>
    <tbody>
        

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->order_id}}</td>
        <!-- <td>{{$list->type}}</td> -->
        <td>{{$list->service_id}}</td>
        <td>{{$list->unit_price}}</td>
        <td>{{$list->quantity}}</td>
        <td>{{$list->sub_total}}</td>

      
        <td>
        <a class="btn btn-primary" href="">View</a>
        </td>

        
    </tr>
        
    </tbody>
        

        
    </tr>
      
    </tbody>
</table>
@endsection