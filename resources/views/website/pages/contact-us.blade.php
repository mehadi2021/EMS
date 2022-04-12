@extends('website.master')

@section('content')
<!Doctype HTML>
<script src="https://kit.fontawesome.com/3893cf91e1.js" crossorigin="anonymous"></script>
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
  div.center1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.fas{
  color:white;
 
  text-align:center;
}

.far{
  color:white;
 
  text-align:center;
}
</style>

<body>

<div align='center'>

<img src="Frontend/images/Event Management 2.jpg"  alt="Event Management Picture" width="850" height="440" >

</div>

<br>

<h2 style="text-align:center; color:white; font-size:40px">Contact Us</h2>

<p style="text-align:center; color:white; font-size:20px"> Refined service. Memorable dining. Always at TheTaj.</p> 

<p style="text-align:center; color:white; font-size:20px"> WE ARE HERE 24/7!</p>

<p style="text-align:center"><i class="fas fa-phone-alt fa-5x"></i> </p>
<p style="text-align:center; color:white; font-size:20px"> <b>Phone</b> 01839741579</p> 
<p style="text-align:center; color:white; font-size:20px"> <b>E-mail</b> khtajuddin97@gmail.com</p> 

<p style="text-align:center"><i class="fas fa-home fa-5x"></i></p>

<p style="text-align:center; color:white; font-size:20px"> <b>Physical Address</b></p> 
<p style="text-align:center; color:white; font-size:20px"> TheTaj,<br>176 Shaheed Syed Nazrul<br>Islam Sarani, Dhaka, 1000, Bangladesh</p> 


<p style="text-align:center; color:white; font-size:20px"> LET US HOST YOUR NEXT EVENT! CONTACT US TODAY!</p> 
<br><br>


<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Contact</span> Us </h1>

    <form action="{{route('frontend.contact-us.post')}}" method="post">
      @csrf
        <div class="inputBox">
            <input type="text" name="name" placeholder="name" required>
            <input type="email" name="email" placeholder="email" required>
        </div>
        <div class="inputBox">
            <input type="number" name="number" placeholder="number" required>
            <input type="text" name="subject" placeholder="subject" required>
        </div>
        <textarea name="message" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>

</section>

<!-- contact section ends -->


</body>
</html>




@endsection