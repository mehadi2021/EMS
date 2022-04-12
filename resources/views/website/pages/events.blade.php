@extends('website.master')

@section('content')


<style>
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
  .responsive {
    width: 100%;
  }
}
.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>


<h2 style="text-align:center; color:white; font-size:40px">Choose Your Desired Events</h2>
<br><br>



<div class="responsive">
  <div class="gallery" >
    <a target="_blank" ">
      <img src="{{url('/Frontend/images/g-2.jpg')}}" alt="Marriage Couple">
    </a>
    <a href="{{route('frontend.marriage')}}" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">Marriage Event</a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" >
      <img src="{{url('/Frontend/images/birthday 1.jpg')}}" alt="Birthday" >
    </a>
    <a href="{{route('frontend.birthday')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Birthday Event</a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank">
      <img src="{{url('/Frontend/images/Corporate event.jpg')}}" alt="Corporate Events" >
    </a>
    <a href="{{route('frontend.office')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Corporate Event</a>
  </div>
</div>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" >
      <img src="{{url('/Frontend/images/special event.jpg')}}" alt="Special Image" >
    </a>
    <a href="{{route('frontend.special-event')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Special Event</a>
  </div>
</div>
<div class="clearfix"></div>
<!-- <div style="padding:6px;">
  <p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
</div> -->
</body>
</html>
@endsection