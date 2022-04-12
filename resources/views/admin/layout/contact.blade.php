@extends('admin.master')

@section('content')



  

    <h1>Client's Message</h1>

   

    <table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Client's Name</th>
        <th scope="col">Email</th>
        <th scope="col">Number</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Action</th>
        

        
    </tr>
    </thead>
    <tbody>
    <tr>
    <tbody>
        @foreach($contacts as $key=> $list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <!-- <td>{{$list->type}}</td> -->
        <td>{{$list->email}}</td>
        <!-- <td>{{$list->image}}</td> -->
        <td>{{$list->number}}</td>
        <td>{{$list->subject}}</td>
        <td>{{$list->message}}</td>
        <td>
                        <a class="btn btn-danger" href="{{route('backend.contact.delete',$list->id)}}">Delete</a>
                    </td>

        
    </tr>
        @endforeach
    </tbody>
        

        
    </tr>
      
    </tbody>
</table>
@endsection


