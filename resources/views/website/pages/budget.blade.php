@extends('website.master')

@section('content')

 <div class="col-md-8" style="padding-left:250px;">

<form action="{{ route('budget.store') }}" method="post" enctype="multipart/form-data">
  @csrf




<div class="mb-4" style="font-size:2rem;">
  <label for="exampleInputEmail1" class="form-label" style="color:white;">Event name</label>
    <select name="name" class="form-control" required style="font-size:1.5rem;">
         {{-- <option value="">Select Your Option</option>
      @foreach($events as $event) --}}
        <option value="{{$events->name}}">{{$events->name}}</option>
      {{-- @endforeach   --}}
    </select>

  </div>



  <div class="mb-4" style="font-size:2rem;">
  <label for="exampleInputEmail1" class="form-label" style="color:white;">Event service</label>
  <select name="service" class="form-control" required style="font-size:1.5rem;">
  @foreach ($services as $service)
    <option value="{{$service->name }}">{{$service->name }}</option>
  @endforeach
  </select>
  </div>




<div class="mb-4" style="font-size:2rem;">
  <label for="exampleInputEmail1" class="form-label" style="color:white;">Event venue(our venue)</label>
     <select name="venue" class="form-control" required style="font-size:1.5rem;">
         <option value="">Select Your Option</option>
         <option value="none">None</option>
      {{-- @foreach($events as $event) --}} --}}
        <option value="{{$events->venue}}">{{$events->venue}}</option>
      {{-- @endforeach  --}}
    </select>
  </div>




  <div class="mb-4" style="font-size:2rem;">
  <label for="exampleInputEmail1" class="form-label" style="color:white;">Event venue(Your choose venue)</label>
   <input type="text" name="venue1" class="form-control" style="font-size:1.5rem;">
  </div>



  <div class="mb-4" style="font-size:2rem;">
  <label for="exampleInputEmail1" class="form-label" style="color:white;">Number  of Guest</label>
  <select name="guest" class="form-control" required style="font-size:1.5rem;">
      <option value="">Select Your Option</option>
        <option value="100">100</option>
        <option value="100">250</option>
        <option value="100">500</option>
        <option value="100">800</option>
        <option value="100">1000</option>
    </select>
  </div>
  <div class="mb-4" style="font-size:2rem;">
    <label for="exampleInputEmail1" class="form-label" style="color:white;">Event Date</label>
    <input type="date" name="date" class="form-control" style="font-size:1.5rem;" >

  </div>














  <div class="mb-4" style="font-size:2rem;">
    <label for="exampleInputPassword1" class="form-label" style="color:white;">Start time</label>
    <input type="time" name="start" class="form-control" required style="font-size:1.5rem;">
  </div>

  <div class="mb-4" style="font-size:2rem;">
    <label for="exampleInputPassword1" class="form-label" style="color:white;">End time</label>
    <input type="time" name="end" class="form-control" required style="font-size:1.5rem;">
  </div>






  <button type="reset" class="btn btn-primary">Reset</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>


@endsection
