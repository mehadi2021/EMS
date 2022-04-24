@extends('website.master')

@section('content')

    <h1>Team List</h1>

    <table class="table">
    <thead>
    <tr>
        <th scope="col" style="color:white;">Name</th>
        <th scope="col" style="color:white;">Age</th>
        <th scope="col" style="color:white;">Gender</th>
        {{-- <th scope="col" style="color:white;">NID Number</th>
        <th scope="col" style="color:white;">Address</th>
        <th scope="col" style="color:white;">Phone</th>
        <th scope="col" style="color:white;">Responsibility</th>
        <th scope="col" style="color:white;">Image</th> --}}

    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=> $list)

    <tr>
        <td style="color:white;">{{$list->name}}</td>
        <td style="color:white;">{{$list->venue}}</td>
        <td style="color:white;">{{$list->venue1}}</td>
        {{-- <td style="color:white;">{{$list->nid}}</td>
        <td style="color:white;">{{$list->address}}</td>
        <td style="color:white;">{{$list->phone}}</td>
        <td style="color:white;">{{$list->responsibility}}</td>
        <!-- <td>{{$list->image}}</td> -->
        <td><img src="{{url('/uploads/'.$list->image)}}" width="100px"></td> --}}

        @endforeach
    </tbody>
</table>
@endsection


