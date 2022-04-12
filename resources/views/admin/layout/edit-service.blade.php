@extends('admin.master')
@section('content')
@if(session()->has('message'))
				<p class="alert alert-success">{{session()->get('message')}}</p>
			@endif
<h1> Add Services </h1>

<form action="{{route('backend.service.update',$list->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Service Name</label>
    <input type="text" name="name" value="{{$list->name}}"  class="form-control" >
    
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Event name</label>
    <select name="event_id" class="form-control" required>
      @foreach($events as $event)
        <option value="{{$event->id}}">{{$event->name}}</option>
      @endforeach  
    </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Service Details</label>
    <input type="text" name="description" value="{{$list->description}}" class="form-control" required >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Service Price</label>
    <input type="number" name="price"value="{{$list->price}}" class="form-control" required >
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Service Status</label>
    <input type="text" name="status" value="{{$list->status}}" class="form-control" required >
    
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Service Image</label>
    <input type="file" name="image" class="form-control" required >
  </div>

  



  <button type="reset" class="btn btn-primary">Reset</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection  