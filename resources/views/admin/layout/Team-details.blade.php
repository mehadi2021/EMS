@extends('admin.master')


@section('content')

    <a href="#" class="btn btn-primary" onclick="printDiv('printableArea')">Print</a>
    <br><br>

<div class="card" id="printableArea">

<h1>Team Details</h1>
      <p><img src = "{{(url('/uploads/'.$lists->image))}}" alt="item image" width="100px"></p>
      <p>{{($lists->name)}}</p>
      <p>{{($lists->age)}}</p>
      <p>{{($lists->gender)}}</p>
      <p>{{($lists->nid)}}</p>
      <p>{{($lists->address)}}</p>
      <p>{{($lists->phone)}}</p>
      <p>{{($lists->responsibility)}}</p>



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