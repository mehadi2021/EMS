@extends('admin.master')

@section('content')


 <form action="" style="float:right;" method="Get" >
                <div class="input-group" >
                    <input class="form-control" name="search" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <!-- <button class="btn btn-primary"  id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button> -->
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
  

    <h1>Service List</h1>

   

    <table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Client's Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Amount</th>
        <th scope="col">TrxID</th>
        

        
    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=> $list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <td>{{$list->email}}</td>
        <td>{{$list->number}}</td>
        <td>{{$list->amount}}</td>
        <td>{{$list->trxid}}</td>  
        
    </tr>
        @endforeach
    </tbody>
</table>
@endsection