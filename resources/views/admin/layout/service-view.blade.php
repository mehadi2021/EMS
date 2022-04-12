@extends('admin.master')


@section('content')

<a href="#" class="btn btn-primary" onclick="printDiv('printableArea')">Print</a>
  
    <br> <br>
<div class="card" id="printableArea">
    

<h1>Event Details</h1>
      <p><img src = "{{(url('/uploads/'.$list->image))}}" alt="item image" width="100px"></p>
      <p>{{($list->name)}}</p>
      <p>{{($list->description)}}</p>
      <p>{{($list->event_id)}}</p>
      <p>{{($list->price)}}</p>
      <p>{{($list->status)}}</p>
    

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