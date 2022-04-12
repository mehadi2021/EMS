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
  width: 100%;
  height: auto;
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


<h2 style="text-align:center; font-size:40px">Special Events</h2>
<br><br>

<!-- 
<div class="responsive">
  <div class="gallery" >
    <a target="_blank" href="img_5terre.jpg">
      <img src="{{url('/Frontend/images/saint martin 2.jpg')}}" alt="Stage Decoration" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">Saint Martin</a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_forest.jpg">
      <img src="{{url('/Frontend/images/Sundarban.jpg')}}" alt="Birthday" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sundarban</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_lights.jpg">
      <img src="{{url('/Frontend/images/kaptai lack.png')}}" alt="Sound System" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kaptai Lake</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{url('/Frontend/images/Mahastangar 2.jpg')}}" alt="Lighting Image" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Mahasthangarh</a>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{url('/Frontend/images/Sajek valley 1.jpg')}}" alt="Buffet Image" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Sajek Valley</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_mountains.jpg">
      <img src="{{url('/Frontend/images/ratargul swamp forrest.jpg')}}" alt="Buffet Image" width="600" height="400">
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Ratargul Swamp Forest</a>
  </div>
</div>

<div class="clearfix"></div> -->

<!-- <div style="padding:6px;">
  <p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
</div> -->

</body>
</html>




@endsection