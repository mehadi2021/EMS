<style>


body {
    background: #eee
}
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<div class="card" id="printableArea">
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <div class="p-3 bg-white rounded">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-uppercase">Invoice</h1>
                        <div class="billed"><span class="font-weight-bold text-uppercase">User name</span><span class="ml-1">{{$user->name}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">User email</span><span class="ml-1">{{$user->email}}</span></div>
                        <div class="billed"><span class="font-weight-bold text-uppercase">Generated at</span><span class="ml-1">{{$user->created_at}}</span></div>
                    </div>
                    <div class="col-md-6 text-right mt-3">
                        <h4 class="text-danger mb-0">TheTaj</h4><span>Event Management System</span>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Service</th>
                                    <th>Unit</th>
                                    <th>Price</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $total = 0; @endphp
                                @foreach($details as $detail)
                                <tr>
                                    <td>{{$detail->service->name}}</td>
                                    <td>{{$detail->quantity}}</td>
                                    <td>{{$detail->unit_price}}</td>
                                    <td>{{$detail->sub_total}}</td>
                                @php 
                                    $total = $detail->sub_total + $total; 
                                @endphp

                                </tr>
                                @endforeach
                                <th>Total Bill</th>
                                <th></th>
                                <th></th>
                                <th>{{$total}}</th>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    

</div>
</div>
<a href="#" class="btn btn-warning" onclick="printDiv('printableArea')">Print</a>

<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>






