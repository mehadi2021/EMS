@extends('admin.master')
@section('content')

<h1> Add Event </h1>

<form action="{{route('event')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Event Name</label>
    <input type="text" name="name" class="form-control" >

  </div>

<!--
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Event Type</label>
  <select name="type" class="custom-select" style="width: 100%; height: 38px; border-radius: 5px; border: 1px solid ligghtgray;">
  <option selected>Select Option</option>
  <option value="Marriage Event">Marriage Event</option>
  <option value="Birthday Event">Birthday Event</option>
  <option value="Office Event">Office Event</option>
 <option value="Tour Event">Tour Event</option> -->
<!-- </select>

  </div> -->




  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Event Details</label>
    <input type="text" name="description" class="form-control" required >
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Event Venue</label>
    <input type="text" name="venue" class="form-control" required >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Event Image</label>
    <input type="file" name="image" class="form-control" required >
  </div>






  <button type="reset" class="btn btn-primary">Reset</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
