@extends('website.master')

@section('content')
 <div class="col-md-6" style="padding-left:500px;">
<p style="color:white;font-size:20px;">Thank for Your Information</p>
@foreach($services as $list)
 {{-- @if($list->event_id=='1') --}}
  <a href="{{route('addToCart',$list->id)}}" class="btn btn-primary">{{ $list->name }}Confirm Booking</a>
  {{-- @endif --}}
 @endforeach
<a href="{{route('cart')}}" class="btn btn-primary">Check Booking </a>
 </div>

@endsection
