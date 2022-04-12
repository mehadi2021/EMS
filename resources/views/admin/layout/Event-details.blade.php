@extends('admin.master')


@section('content')

<a href="#" class="btn btn-primary" onclick="printDiv('printableArea')">Print</a>
  
    <br> <br>
<div class="card" id="printableArea">
    

<h1>Event Details</h1>
      <p><img src = "{{(url('/uploads/'.$lists->image))}}" alt="item image" width="100px"></p>
      <p>{{($lists->name)}}</p>
      <p>{{($lists->type)}}</p>
      <p>{{($lists->guest)}}</p>
      <p>{{($lists->description)}}</p>
    

      <script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection