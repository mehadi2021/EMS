@extends('admin.master')

@section('content')


<div class="form-row">

    <div class="form-group col-md-6">
        <form action="{{route('reportsearch')}}" method="get">
            @csrf
            <label for="inputPassword4">From date</label>
            <input name="from" class="form-control" id="inputPassword4"  type="date" placeholder="">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">To date</label>
            <input name="to" class="form-control" id="inputPassword4"  type="date" placeholder="">
            </div>
            <br>
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
        <a href="#" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>

      </div>
      <br>
      <div class="card" id="printableArea">
      <h1 style="text-align:center;"><span style="color:blue;">TheTaj</span></h1>
      <p style="text-align:center;">Event Management System <br>176 Shaheed Syed Nazrul
Islam Sarani, Dhaka, 1000, Bangladesh<br><span style="color:red;">Mobile- 01839741579; Email - thetaj@gmail.com</span></p>
      
      <h1 style="text-align:center;">Report</h1>
     
      <table class="table">
      <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">User ID</th>
            <th scope="col">Total Price</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
  
        </tr>
      </thead>

      <tbody>
          @if($orders!= null)
         
          @foreach($orders as $key=>$order)
          <tr>
            
            <td>{{ $key+1 }}</td>
            <td>{{  $order->user_id }}</td>
            <td>{{  $order->total_price }}</td>
            <td>{{  $order->created_at }}</td>
            <td>{{  $order->updated_at }}</td>
          </tr>
          @endforeach
          @else
          <tr>
              <p>No data found</p>
            @endif
          </tr>
      </tbody>
     
    </table>

      </div>
</div>
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