<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{url('admin/')}}">Admin Panel</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
          
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4" >
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('admin.logout')}}">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{url('admin/')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Add Options</div>                     
                                
                            <a class="nav-link" href="{{route('event')}}">Add Event</a>
                        
                            <a class="nav-link" href="{{route('backend.service.create')}}">Add Service</a>
                            <a class="nav-link" href="{{route('team')}}">Add Team</a>
                            <a class="nav-link" href="{{route('admin.create-gallery')}}">Add Image</a>
                           
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                               
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                             
                            </div>
                            <div class="sb-sidenav-menu-heading">View Options</div>
                            <a class="nav-link" href="{{route('team.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Team View
                            </a>
                            <a class="nav-link" href="{{route('event.list')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Event View</a>

                            <a class="nav-link" href="{{route('backend.service.list')}}">
                                <div class="sb-nav-link-icon"><i class="far fa-calendar-plus"></i></div>
                               Service List
                            </a>

                            <a class="nav-link" href="{{route('backend.contact.view')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-comment-dots"></i></div>
                               Message View
                            </a>

                            
                            <a class="nav-link" href="{{route('cart.order.view')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-luggage-cart"></i></div>
                               Order view
                            </a>

                            <!-- <a class="nav-link" href="{{route('admin.invoice')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Invoice
                            </a> -->

                            <a class="nav-link" href="{{route('admin.image.list')}}">
                                <div class="sb-nav-link-icon"><i class="far fa-images"></i></div>
                               Gallery
                            </a>

                            <a class="nav-link" href="{{route('payment.list')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-bill-alt"></i></div>
                               Payment List
                            </a>

                            <a class="nav-link" href="{{route('reportsearch')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-signature"></i></div>
                               Report View
                            </a>
                       

                        </div>
                    </div>
                    <!-- <div class="sb-sidenav-footer">
                        <div class="small">Developed By:</div>
                        Khandoker Tajuddin <br>
                        ID#17203031
                    </div> -->
                </nav>
            </div>
            <div id="layoutSidenav_content">