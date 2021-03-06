@extends('layouts.main2')

@section('title', 'Home')

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
                                <a href="/lokasi/promasan" class="boxed-btn3">Explore Now</a>
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
                                <a href="/lokasi/medini" class="boxed-btn3">Explore Now</a>
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
                                <a href="/lokasi/separe" class="boxed-btn3">Explore Now</a>
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
                                <a href="/lokasi/gempol" class="boxed-btn3">Explore Now</a>
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
    <br />
    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    {{-- <p class="sample-text">KKN UNISS 2021</p> --}}
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
                        {{-- <p>-</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach ($posts as $post)

                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb">

                                @if ($post->image_thumbnail)
                                    <img src="{{ asset('storage/' . $post->image_thumbnail) }}" alt="{{ $post->title }}">
                                @else
                                    <img src="{{ asset('template/img/pages/no-image.png') }}"
                                        alt="{{ $post->title }}">
                                @endif

                                <p class="prise"><a class="text-white"
                                        href="/lokasi/{{ $post->category->name }}"> {{ $post->category->name }}</a></p>
                            </div>
                            <div class="place_info">
                                <a href="/destinasi/{{ $post->slug }}">
                                    <h3>{{ $post->title }}</h3>
                                </a>
                                <p>Posted By : <a href="/authors/{{ $post->author->username }}">
                                        {{ $post->author->name }}</a></p>
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

                @endforeach

                <!-- <div class="col-lg-4 col-md-6">
                                        <div class="single_place">
                                            <div class="thumb">
                                                <img src="{{ asset('template/img/destination/d-promasan.png') }}" alt="">
                                                <p class="prise">Free</p>
                                            </div>
                                            <div class="place_info">
                                                <a href="/destinasi/detail"><h3>Puncak Gunung Ungaran</h3></a>
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
                                                <a href="/destinasi/detail"><h3>Perkebunan Teh</h3></a>
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
                                                <a href="/destinasi/detail"><h3>Camping Ground</h3></a>
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
                                                <a href="/destinasi/detail"><h3>Curug Lawe Sicepit</h3></a>
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
                                    </div>-->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_place_btn text-center">
                        <a class="boxed-btn4" href="/destinasi">More Places</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- VIDEO PREVIEW --}}
@section('video-preview')
    <div class="video_area video_bg overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video_wrap text-center">
                        <h3>Enjoy Video</h3>
                        <div class="video_icon">
                            <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=wE4sIncn0uk">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- Fasilitas --}}
@section('fasilitas')
    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('template/img/svg_icon/roadmap.png') }}" alt="">
                        </div>
                        <h3>Rute Perjalanan</h3>
                        <p>Rute perjalanan yang dapat diakses oleh motor dan mobil</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('template/img/svg_icon/camping.png') }}" alt="">
                        </div>
                        <h3>Camping Ground</h3>
                        <p>Tersedia tempat camping yang luas bagi para pendaki</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('template/img/svg_icon/horn.png') }}" alt="">
                        </div>
                        <h3>Panduan Wisata</h3>
                        <p>Panduan wisata berisi informasi bagi wisatawan yang berkunjung ke tempat wisata</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('template/img/svg_icon/food.png') }}" alt="">
                        </div>
                        <h3>Kuliner</h3>
                        <p>Rasakan dan nikmati kuliner khas Desa Ngesrepbalong</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('template/img/svg_icon/hiking.png') }}" alt="">
                        </div>
                        <h3>Jalur Pendakian</h3>
                        <p>Tersedia jalur pendakian yang aman menuju gunung ungaran</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('template/img/svg_icon/parking.png') }}" alt="">
                        </div>
                        <h3>Parkir</h3>
                        <p>Tersedia tempat parkir yang luas untuk motor dan mobil</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
