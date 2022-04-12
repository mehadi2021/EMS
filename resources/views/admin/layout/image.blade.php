@extends('admin.master')

@section('content')


  

    <h1>Gallery</h1>

   

    <table class="table">
    <thead>
    <tr>
        
        <th scope="col">Image</th>
        <th scope="col">Image Type</th>   
    </tr>
    </thead>
    <tbody>
        @foreach($images as $key=> $image)

    <tr>
      
        
        <td><img src="{{url('/uploads/'.$image->image)}}" width="100px"></td>
        
        <td>{{$image->imagetype}}</td>
                    

        
    </tr>
        @endforeach
    </tbody>
</table>
@endsection