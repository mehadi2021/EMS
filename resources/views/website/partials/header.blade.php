<!-- header section starts  -->

<div style="margin-top:100px;">
@if (session()->has('batch'))
      <p class="alart alart-success"> 
        {{session()->get('batch')}}
      </p>
      @endif

      <!-- @if (session()->has('error'))
      <p class="alart alart-success"> 
        {{session()->get('error')}}
      </p>
      @endif -->

</div>


<header class="header">


    <a href="#" class="logo"><span>The</span>Taj</a>

    <nav class="navbar">
   
        <a href="{{route('user.home')}}" class="active" style="text-decoration: none;">Home</a>
        <a href="{{route('event.show')}}"  style="text-decoration: none;">Events</a>
        <!-- <a href="{{route('frontend.event')}}">Events</a> -->
        <!-- <a href="#service">Service</a> -->
        <a href="{{route('frontend.about-us')}}"style="text-decoration: none;">About Us</a>
        <a href="{{route('image.show')}}"  style="text-decoration: none;">Gallery</a>
        @if(Auth::check())
        <a href="{{route('cart')}}" style="text-decoration: none;"><span class="qnts">Cart: {{session('cart') ? count(session('cart')) : '0'}} </span></a>
        @endif
        <a href="{{route('frontend.contact-us')}}"  style="text-decoration: none;">Contact Us</a>
        <!-- <a href="#price">Price</a> -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Login</button> -->
       
      

    
        @if (auth()->user())
                        <a class="nav-link" href="{{route('user.logout')}}" style="text-decoration: none;">logout</a>
                        
                            <a class="nav-link" href="{{route('frontend.profile')}}" style="text-decoration: none;">{{auth()->user()->name}}</a>
                        
                    @else
                    <!-- <a href="#" class="navbar" data-bs-toggle="modal" data-bs-target="#registration" style="text-decoration: none;" >Registration</a>
                        <a href="{{route('user.login')}}" class="navbar"  data-bs-toggle="modal" data-bs-target="#login" style="text-decoration: none;">
                       Login
                    </a>  -->
                    <a class="nav-link" href="{{route('user.registration')}}"  style="text-decoration: none;">Registration</a>
                    <a class="nav-link" href="{{route('user.login')}}"  style="text-decoration: none;">Login</a>
                    
                    @endif

                    @if(session()->has('batch'))
                    <p class="alart alart-success"> 
                    {{session()->get('batch')}}
                    </p>
                @endif

  
      
    </nav>

<div id="menu-bars" class="fas fa-bars"></div>

</header>

<!-- header section ends -->
  





