@extends('website.master')

@section('content')

<head>
<style>
div.gallery {
  border: 1px solid #ccc;
  text-align:center;
}

div.gallery img {
  width: 350px;
  height: 310px;
  top:10px;
}

div.gallery:hover {
  border: 1px solid #777;
}



div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 10px 10px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 800px) {
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
<meta name="viewport" content= "width = device-width, initial-scale = 1.0">
</head>


<h2 style="text-align:center; color:white; font-size:40px"><span>Welcome to Marriage Ceremony</span></h2>
<br><br>

<div class="center">
  <video src="{{url('/Media/video/weeding.mp4')}}" width="1020" controls></video>
</div>
<br>


<h4 style="text-align:center; color:white; font-size:35px"><span>Let's Plan Your Perfect Weeding...</span></h4>

<h4 style="text-align:center; color:white; font-size:20px"><span>We have affiliation with the best this industry has to offer from photo shoots, floral arrangements, ambience decorations and entertainment we have all the right people standing next to us. So leave all your worry with us, because we will facilitate the realization of your dream, yes it will come true! A hearty memorable experience for you and your guests, with only delightful surprises

</span></h4>

<br><br>



<div class="responsive">
  <div class="gallery" >
    
      <img src="{{url('/Frontend/images/wedding decoration 1.jpg')}}" alt="Wedding Decoration Image" >
    </a>
    <a href="" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">Weeding Decoration</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery" >
    
      <img src="{{url('/Frontend/images/wedding hall 1.jpg')}}" alt="Marriage Couple">
    </a>
    <a href="" class="btn btn-primary btn-lg active"  role="button" aria-pressed="true">Weeding Venue Hall</a>
  </div>
</div>




<div class="responsive">
  <div class="gallery">
   
      <img src="{{url('/Frontend/images/band party 1.jpg')}}" alt="Birthday" >
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Band Party</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
      <img src="{{url('/Frontend/images/catering service.jpg')}}" alt="Birthday" >
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Catering Service</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
      <img src="{{url('/Frontend/images/wedding makeover.jpg')}}" alt="Office Events" >
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Weeding Makeup</a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
      <img src="{{url('/Frontend/images/wedding photography.jpg')}}" alt="Tour Image" >
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Weeding Photography</a>
  </div>
</div>




<div class="clearfix">
<div class="responsive">
  <div class="gallery">
  
      <img src="{{url('/Frontend/images/Wedding bor.jpg')}}" alt="Bride Groom" >
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Horse for Bridegroom </a>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    
      <img src="{{url('/Frontend/images/wedding palki.jpg')}}" alt="Tour Image" >
    </a>
    <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Palki for Bride </a>
  </div>
</div>
</div>

<!-- <div style="padding:6px;">
  <p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
</div> -->

</body>
</html>




@endsection