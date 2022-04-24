@extends('website.master')

@section('content')

    <h1>Team List</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col" style="color:white; font-size:1.5rem;">Name</th>
        <th scope="col" style="color:white; font-size:1.5rem;">Age</th>
        <th scope="col" style="color:white; font-size:1.5rem;">Gender</th>
        <th scope="col" style="color:white; font-size:1.5rem;">NID Number</th>
        <th scope="col" style="color:white; font-size:1.5rem;">Address</th>
        <th scope="col" style="color:white; font-size:1.5rem;">Phone</th>
        <th scope="col" style="color:white; font-size:1.5rem;">Responsibility</th>
        <th scope="col" style="color:white; font-size:1.5rem;">Image</th>

    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=> $list)

    <tr>
        <td style="color:white; font-size:1.5rem;">{{$list->name}}</td>
        <td style="color:white; font-size:1.5rem;">{{$list->age}}</td>
        <td style="color:white; font-size:1.5rem;">{{$list->gender}}</td>
        <td style="color:white; font-size:1.5rem;">{{$list->nid}}</td>
        <td style="color:white; font-size:1.5rem;">{{$list->address}}</td>
        <td style="color:white; font-size:1.5rem;">{{$list->phone}}</td>
        <td style="color:white; font-size:1.5rem;">{{$list->responsibility}}</td>
        <!-- <td>{{$list->image}}</td> -->
        <td><img src="{{url('/uploads/'.$list->image)}}" width="100px"></td>

        @endforeach
    </tbody>
</table>
@endsection


