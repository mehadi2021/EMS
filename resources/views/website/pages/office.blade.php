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
  width: 350px;
  height: 310px;
  top:10px;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 10px 6px;
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

div.center{
    text-align:center;
  }
</style>


<h2 style="text-align:center; color:white; font-size:40px">Corporate Events</h2>
<br><br>

<div class="center">
  <video src="{{url('/Media/video/corporate event.mp4')}}" width="1020" controls></video>
</div>
<br>

<h4 style="text-align:center; color:white; font-size:35px"><span>Let's Plan Your Perfect Weeding...</span></h4>

<h4 style="text-align:center; color:white; font-size:20px"><span>We have affiliation with the best this industry has to offer from photo shoots, floral arrangements, ambience decorations and entertainment we have all the right people standing next to us. So leave all your worry with us, because we will facilitate the realization of your dream, yes it will come true! A hearty memorable experience for you and your guests, with only delightful surprises

</span></h4>

<br><br>




<div class="responsive">
  <div class="gallery" >
    <a target="_blank" href="img_5terre.jpg">
      <img src="{{url('/Frontend/images/stage decoration 1.jpg')}}" alt="Stage Decoration" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">Stage Decoration</a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="{{url('/Frontend/images/LED video wall 1.jpg')}}" alt="Birthday" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">LED Video Wall</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="{{url('/Frontend/images/Sound System 1.jpg')}}" alt="Sound System" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sound System</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{url('/Frontend/images/lighting 1.jpg')}}" alt="Lighting Image" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Lighting</a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{url('/Frontend/images/buffet 2.jpg')}}" alt="Buffet Image" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Buffet</a>
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