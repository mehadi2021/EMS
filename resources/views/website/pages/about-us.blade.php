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
div.center{
    text-align:center;
  }
</style>

<h2 style="text-align:center; color:white; font-size:40px">About Us</h2>
<br><br>

<div class="center">
  <video src="{{url('/Media/video/about us.mp4')}}" width="1020" controls></video>
</div>
<br>



<p style="text-align:center; color:white; font-size:20px"> Refined service. Memorable dining. Always at TheTaj.</p> 

<p style="text-align:center; color:white; font-size:20px"> WE ARE HERE 24/7!</p> 

<p style="text-align:center; color:white; font-size:20px"> LET US HOST YOUR NEXT EVENT! CONTACT US TODAY!</p> 
<br><br>
<h2 style="text-align:center; color:white; font-size:20px">Event Planning Is Hard<br>WE CAN HELP YOU</h2>

<div align='center'>
<img src="Frontend/images/about us photo 1.jpg"  alt="Event Management Picture" width="1240" height="480" >
<p style="text-align:center; color:white; font-size:20px; padding-right: 110px; padding-left: 110px; padding-top: 30px; padding-bottom: 30px;"><strong>TheTaj </strong>is a full service event management firm based in Uttara, Dhaka that was created by pairing together our passion for business and events. We bring a frest, unique approach to the event management industry.</p>

<p style="text-align:center; color:white; font-size:20px; padding-right: 110px; padding-left: 110px; padding-top: 30px; padding-bottom: 30px;">Our team understands that a properly executed event can be leveraged to support an organization's strategic vision, incorporated into a company's marketing plan, or used to build networks and client loyalty.</p>
</div>




<div align='center' style="position: relative;">
<img src="Frontend/images/corp-events.jpg"  alt="Event Management Picture" width="1240" height="480" >
<h2 style="text-align:center; color:white; font-size:20px; position: absolute; top: 228px; left: 700px; font-weight: bold; font-size: 30px;">Event Planning<br>IS OUR PASSION</h2>

<p style="text-align:center; color:white; font-size:20px; padding-right: 110px; padding-left: 110px; padding-top: 30px; padding-bottom: 30px;"> <strong>TheTaj </strong>approaches every project with meticulous attention to detail and obsessive precision. Regardless of size and scope, we treat your event like a business with clear strategic goals, defined milestones, and a comprehensive plan to ensure that your event is delivered on Time and to budget. At TheTaj, we put your organization first. We learn about your business, we focus on your challenges, and we paln events to support your goals.</p>
</div>







</body>
</html>




@endsection