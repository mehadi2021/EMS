@extends('admin.master')

@section('content')


 <form action="{{route('event.search')}}" style="float:right;" method="Get" >
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
        <th scope="col">Service Name</th>
        <th scope="col">Service Details</th>
        <th scope="col">Price</th>
        <th scope="col">Status</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>

        
    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=> $list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <!-- <td>{{$list->type}}</td> -->
        <td>{{$list->description}}</td>
        <!-- <td>{{$list->image}}</td> -->
        <td>{{$list->price}}</td>
        <td>{{$list->status}}</td>
        <td><img src="{{url('/uploads/'.$list->image)}}" width="100px"></td>
        <td>
                        <a class="btn btn-primary" href="{{route('backend.service.view',$list->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('backend.service.edit',$list->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('backend.service.delete',$list->id)}}">Delete</a>
                    </td>

        
    </tr>
        @endforeach
    </tbody>
</table>
@endsection