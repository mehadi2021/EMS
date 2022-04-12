@extends('admin.master')

@section('content')



    <h1>Event  search List</h1>

   

    <table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Event Name</th>
        <th scope="col">Event Type</th>
        <th scope="col">Guest</th>
        <th scope="col">Description</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>

        
    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=> $list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <td>{{$list->type}}</td>
        <td>{{$list->guest}}</td>
        <td>{{$list->description}}</td>
        <td><img src="{{url('/uploads/'.$list->image)}}" width="100px"></td>
        <td>
                        <a class="btn btn-primary" href="{{route('event.detail',$list->id)}}">View</a>
                        <a class="btn btn-info" href="">Edit</a>
                        <a class="btn btn-danger" href="{{route('event.delete',$list->id)}}">Delete</a>
                    </td>

        
    </tr>
        @endforeach
    </tbody>
</table>
@endsection