@extends('admin.master')
@section('content')

<h1> Update Event </h1>

<form action="{{route('event.update',$list->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Event Name</label>
    <input type="text" name="name" value="{{$list->name}}"class="form-control" >
    
  </div>

  

  

  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Event Description</label>
    <input type="text" name="description" value="{{$list->description}}" class="form-control" >
  </div>

  

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Event Image</label>
    <input type="file" name="image" class="form-control" >
  </div>

  <button type="reset" class="btn btn-primary">Reset</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection  