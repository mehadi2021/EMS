@extends('admin.master')
@section('content')

<h1> Add Team Member </h1>


@if(session()->has('message'))
				<p class="alert alert-success">{{session()->get('message')}}</p>
			@endif

			@if($errors->any())
				@foreach($errors->all() as $er)
					<p class="alert alert-danger">{{$er}}</p>
				@endforeach
			@endif
<form action="{{route('team.upadte',$list->id)}}" method="post"  enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" name="name" value="{{$list->name}}" class="form-control" required >
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input type="number" name="age" , value="{{$list->age}}" class="form-control" required>
    
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Gender</label>
    <input type="text" name="gender" value="{{$list->gender}}" class="form-control" required>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NID Number</label>
    <input type="number" name="nid" value="{{$list->nid}}" class="form-control" required>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" name="address" value="{{$list->address}}" class="form-control" required>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone</label>
    <input type="number" name="phone"  value="{{$list->phone}}" class="form-control" required>
    
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Responsibility</label>
    <input type="text" name="responsibility" value="{{$list->responsibility}}" class="form-control" required >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> Image</label>
    <input type="file" name="image" class="form-control" >
  </div>

  <button type="reset" class="btn btn-primary">Reset</button>
  <button type="submit" class="btn btn-primary">Add Member</button>
</form>
@endsection 


