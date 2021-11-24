@extends('layouts.main2')

@section('title', 'Destinasi Wisata')

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Destinations</h3>
                    <p>Explore Pariwisata Kendal</p>
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
                    <h3>Spot Destinasi Wisata {{ $title }}</h3>
                    <p>-</p>
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
            

        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex justify-content-center more_place_btn text-center ">
                    {{-- {{ $posts->links() }} --}}
                    {{-- <a class="boxed-btn4" href="#">More Places</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
