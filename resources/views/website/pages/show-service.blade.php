@extends('website.master')

@section('content')

<!-- CSS only -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<styonsive {
    width: 100%;
  }
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<h2 style="text-align:center; color:white; font-size:40px">Choose Your Favourite Services</h2>
<br><br>


    
		

<h5 class="card-title">Services</h5>
@foreach($services as $list)


<h5 class="card-title" style="fornt-size:50px;padding:10px">Event :: {{$list->event->name}}</h5>
<div class="card mb-3"  style="max-width: 1400px; max-height: 420px; padding:10px; margin-left:60px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="{{url('uploads/'.$list->image)}}" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        
  
        <p class="card-text" style="color:black; font-size:20px">Service Name: {{$list->name }}</p>
        <p class="card-text" style="color:black; font-size:20px">Service Details: {{$list->description}}</p>
        <p class="card-text" style="color:black; font-size:20px">Service Price: {{$list->price}}</p>
        <p class="card-text" style="color:black; font-size:20px">Service Status: {{$list->status}}</p>
        
        @if(Auth::check())
        <p><a href="{{route('addToCart',$list->id)}}" class="btn btn-primary">AddToCart</a></p>
        @else
        <p>
        <h3 style="color:red; font-weight:bold">Please login to add this service in your cart</h3>
        </p>
        @endif
        <p class="card-text"><small class="text-muted"></small></p>
       
      </div>
    </div>
  </div>
</div>le>
div.gallery {
  border: 1px solid #ccc;
  text-align:center;
}
div.gallery:hover {
  border: 1px solid #777;
}
div.gallery img {
  width: 360px;
  height: 310px;
}
div.desc {
  padding: 15px;
  text-align: center;
}
* {
  box-sizing: border-box;
}
.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}
@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}
@media only screen and (max-width: 500px) {
  .resp

<!-- <JavaScript Bundle with Popper> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

@endforeach


@endsection