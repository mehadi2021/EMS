@extends('admin.master')


@section('content')

<a href="#" class="btn btn-primary" onclick="printDiv('printableArea')">Print</a>

    <br> <br>
<div class="card" id="printableArea">

 <table class="table">
    <thead>
    <tr>
        <th scope="col">Serial</th>
        <th scope="col">Name</th>
        <th scope="col">Service</th>
        <th scope="col">Venue(offical)</th>
        <th scope="col">venue(Customer Choose)</th>
        <th scope="col">Guest</th>
        <th scope="col">Date</th>
        <th scope="col">Start Event</th>
        <th scope="col">End Event</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
        @foreach($lists as $key=> $list)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$list->name}}</td>
        <td>{{$list->service}}</td>
        <td>{{$list->venue}}</td>
        <td>{{$list->venue1}}</td>
        <td>{{$list->guest}}</td>
        <td>{{$list->date}}</td>
        <td>{{$list->start}}</td>
        <td>{{$list->end}}</td>
        <!-- <td>{{$list->image}}</td> -->

        <td>
                        <a class="btn btn-primary" href="">View</a>

                    </td>

    </tr>
        @endforeach
    </tbody>
</table>
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
