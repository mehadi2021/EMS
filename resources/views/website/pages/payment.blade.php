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

<img src="Frontend/images/bkash.jpg"  alt="Event Management Picture" width="850" height="440" >

</div>
<br>

<p style="text-align:center; color:white; font-size:20px">
    <b>Send money  {{$need_to_pay}} .BDT (10% of {{$total}} .BDT) to <span style="color:red">01839741579</span> through <span style="color:red">bKash</span> personal account number.</b></p> 
<p style="text-align:center; color:white; font-size:20px">
<b>After sending money you will get a return message with TrxID.</b></p>
<p style="text-align:center; color:white; font-size:20px">
<b>You have to fillup the form below with TrxID and all the required info.</b></p>
<p style="text-align:center; color:white; font-size:20px">
<b>For any assistance you can contact to 01839741579 by 10am to 8pm.</b></p>

<br><br>


<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Do</span> Payment </h1>

    <form action="{{route('payment.store')}}" method="post">
      @csrf
        <div class="inputBox">
            <input type="text" name="name" placeholder="name" required>
            <input type="email" name="email" placeholder="email" required>
        </div>
        <div class="inputBox">
            <input type="number" name="number"  placeholder="BKash Number" required>
            <input type="number" name="amount" placeholder="Payment Amount" required>
        </div>
        <textarea name="trxid" placeholder="TrxID" id="" cols="2" rows="2"></textarea>
        <textarea name="location" placeholder="Event Date and Location" id="" cols="2" rows="2"></textarea>
        <input type="submit" value="Submit" class="btn">
    </form>

</section>

<!-- contact section ends -->


</body>
</html>




@endsection