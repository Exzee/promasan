@extends('layouts.main2')

@section('title', 'home')

@section('slider')
    

    
<!-- slider_area_start -->
<div class="slider_area">
    <div class="slider_active owl-carousel">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Promasan</h3>
                            <p>Eksplorasi Wisata Tersembunyi</p>
                            <a href="#" class="boxed-btn3">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_2 overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Medini</h3>
                            <p>Eksplorasi Spot Pariwisata</p>
                            <a href="#" class="boxed-btn3">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_3 overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Separe</h3>
                            <p>Jelajahi Keanekaragaman Kuliner</p>
                            <a href="#" class="boxed-btn3">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_4 overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-md-12">
                        <div class="slider_text text-center">
                            <h3>Gempol</h3>
                            <p>Jelajahi Kulturasi Budaya</p>
                            <a href="#" class="boxed-btn3">Explore Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- slider_area_end -->

@endsection

{{-- @section('spot')
    <!-- popular_destination_area_start  -->
    <div class="popular_destination_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Spot Favorit</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ asset('template/img/destination/1.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Italy <a href="{{ asset('template/travel_destination.html') }}">  07 Places</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ asset('template/img/destination/2.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Brazil <a href="{{ asset('template/travel_destination.html') }}">  03 Places</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ asset('template/img/destination/3.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">America <a href="{{ asset('template/travel_destination.html') }}">  10 Places</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ asset('template/img/destination/4.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Nepal <a href="{{ asset('template/travel_destination.html') }}">  02 Places</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ asset('template/img/destination/5.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Maldives <a href="{{ asset('template/travel_destination.html') }}">  02 Places</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{ asset('template/img/destination/6.png') }}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">Indonesia <a href="{{ asset('template/travel_destination.html') }}">  05 Places</a> </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- popular_destination_area_end  -->
@endsection --}}

@section('statistik-data-desa')
<br/>
<!-- newletter_area_start  -->
<div class="newletter_area overlay">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-10">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="newsletter_text">
                            <h4>Data Dusun di Desa Ngesrep Balong</h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mail_form">
                            <div class="row no-gutters">
                                <div class="col-lg-9 col-md-8">
                                    <div class="newsletter_field">
                                        <div class="newsletter_text">
                                            
                                            <p>1. Dusun Promasan</p>
                                            <p>2. Dusun Medini</p>
                                            <p>3. Dusun Separe</p>
                                            <p>4. Dusun Gempol</p>
                                        </div>
                                    </div>
                                </div>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- newletter_area_end  -->
@endsection

<!--Objec Wisata-->
@section('tujuan-wisata')

<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Spot Wisata</h3>
                    <p>-</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{ asset('template/img/destination/d-promasan.png') }}" alt="">
                        <p class="prise">Free</p>
                    </div>
                    <div class="place_info">
                        <a href="{{ asset('template/destination_details.html') }}"><h3>Puncak Gunung Ungaran</h3></a>
                        <p>Promasan</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            {{-- <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{ asset('template/img/destination/d-perkebunan.png') }}" alt="">
                        <p class="prise">Free</p>
                    </div>
                    <div class="place_info">
                        <a href="{{ asset('template/destination_details.html') }}"><h3>Perkebunan Teh</h3></a>
                        <p>Medini</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            {{-- <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{ asset('template/img/destination/d-camping_ground.png') }}" alt="">
                        <p class="prise">Free</p>
                    </div>
                    <div class="place_info">
                        <a href="{{ asset('template/destination_details.html') }}"><h3>Camping Ground</h3></a>
                        <p>Promasan</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            {{-- <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{ asset('template/img/place/4.png') }}" alt="">
                        <p class="prise">Free</p>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>Kampung Candi Promasan</h3></a>
                        <p>Promasan</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{ asset('template/img/place/5.png') }}" alt="">
                        <p class="prise">Free</p>
                    </div>
                    <div class="place_info">
                        <a href="destination_details.html"><h3>Goa Jepang</h3></a>
                        <p>Promasan</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="{{ asset('template/img/place/6.png') }}" alt="">
                        <p class="prise">Free</p>
                    </div>
                    <div class="place_info">
                        <a href="{{ asset('template/destination_details.html') }}"><h3>Curug Lawe Sicepit</h3></a>
                        <p>United State of America</p>
                        <div class="rating_days d-flex justify-content-between">
                            <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span>
                            <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="#">More Places</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection