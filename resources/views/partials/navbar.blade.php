<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('template/img/logo_backup.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="/">home</a></li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/destinasi">Destinasi</a></li>                                        
                                        <li><a href="/panduan">Panduan Wisata</a></li>
                                        <li><a href="#">Lokasi <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                    <li><a href="/lokasi/promasan">Promasan</a></li>
                                                    <li><a href="/lokasi/medini">Medini</a></li>
                                                    <li><a href="/lokasi/separe">Separe</a></li>
                                                    <li><a href="/lokasi/gempol">Gempol</a></li>
                                                    
                                            </ul>
                                        </li>
                                        {{-- <li><a href="/lokasi">Lokasi</a></li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>


                                                
                        <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                            @auth
                            
                            <div class="social_wrap d-flex align-items-center justify-content-end ">                                                        
                                    
                                <div class="dropdown">
                                    <li class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Welcome <strong>{{ auth()->user()->name }} </strong>
                                    </li>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                      <a href="/dashboard" class="dropdown-item"><i class="ti-dashboard"></i> Dashboard</a>
                                      <form action="/logout" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit"><i class="fa fa-sign-out"></i> Logout</a></button>
                                        </form>
                                    </div>
                                  </div>
                                    
                                  @else
                                  <div class="social_wrap d-flex align-items-center justify-content-end">
                                      <ul>                                        
                                          <li><a href="/login"> <i class="fa fa-sign-in"></i> Login</a></li>
                                      </ul>
                                      
                                </div>
                                @endauth
                            </div>

                        </div>
                        {{-- <div class="seach_icon">
                            <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </div> --}}
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->