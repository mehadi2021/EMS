@extends('website.master')

@section('content')

 <div class="col-md-6" style="padding-left:250px;">

<form action="{{ route('booking.store') }}" method="post" enctype="multipart/form-data">
  @csrf




<div class="mb-4">
  <label for="exampleInputEmail1" class="form-label" style="color:white;">Event name</label>
    <input type="text" name="nam" class="form-control" value="{{ auth()->user()->id }}">

  </div>


  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label" style="color:white;">Event Date</label>
    <input type="date" name="date" class="form-control" >

  </div>














  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label" style="color:white;">Start time</label>
    <input type="time" name="start" class="form-control" required >
  </div>

  <div class="mb-4">
    <label for="exampleInputPassword1" class="form-label" style="color:white;">End time</label>
    <input type="time" name="end" class="form-control" required >
  </div>






  <button type="reset" class="btn btn-primary">Reset</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>


@endsection
