@extends('admin.master')

@section('content')

    <h1>Team List</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Gender</th>
        <th scope="col">NID Number</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Responsibility</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
        
    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=> $list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <td>{{$list->age}}</td>
        <td>{{$list->gender}}</td>
        <td>{{$list->nid}}</td>
        <td>{{$list->address}}</td>
        <td>{{$list->phone}}</td>
        <td>{{$list->responsibility}}</td>
        <!-- <td>{{$list->image}}</td> -->
        <td><img src="{{url('/uploads/'.$list->image)}}" width="100px"></td>
        <td>
                        <a class="btn btn-primary" href="{{route('team.detail',$list->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('team.edit',$list->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('team.delete',$list->id)}}">Delete</a>
                    </td>
        
    </tr>
        @endforeach
    </tbody>
</table>
@endsection


