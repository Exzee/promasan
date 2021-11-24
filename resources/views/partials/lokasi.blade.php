@extends('layouts.main2')

@section('title', 'Lokasi Wisata')

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Lokasi Wisata</h3>
                    <p>Pixel perfect design with awesome contents</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->


{{-- DESTINASI WISATA --}}
<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>Spot Destinasi Wisata Per Wilayah</h3>
                    <p>-</p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($categories as $category)
                
            <div class="col-lg-4 col-md-6">
                <div class="single_place">
                    <div class="thumb">
                        <img src="https://source.unsplash.com/1600x900/?nature,water,travel" alt="">
                        {{-- <p class="prise">Free</p> --}}
                    </div>
                    <div class="place_info d-flex justify-content-center align-items-center">
                        <a href="/lokasi/{{ $category->slug }}"><h3>{{ $category->name }}</h3></a>
                        {{-- <p>{{ $category->user->name }}</p> --}}
                        <div class="rating_days d-flex justify-content-between">
                            {{-- <span class="d-flex justify-content-center align-items-center">
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i> 
                                 <i class="fa fa-star"></i>
                                 <a href="#">(20 Review)</a>
                            </span> --}}
                            {{-- <div class="days">
                                <i class="fa fa-clock-o"></i>
                                <a href="#">5 Days</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div> 

            @endforeach
            
            
        </div>
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="more_place_btn text-center">
                    <a class="boxed-btn4" href="/destinasi">More Places</a>
                </div>
            </div>
        </div> --}}
    </div>
</div>