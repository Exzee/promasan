@extends('layouts.main2')

@section('title', 'Detail Artikel')

<div class="destination_banner_wrap overlay">
    <div class="destination_text text-center">
        <h3>DETAIL ARTIKEL</h3>
        <p>Pixel perfect design with awesome contents</p>
    </div>
</div>

{{-- DETAIL ARTIKEL --}}
<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="destination_info">
                    <h3>JUDUL ARTIKEL</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                    <p>Variations of passages of lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing.</p>
                    <div class="single_destination">
                        <h4>Day-01</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                    </div>
                    <div class="single_destination">
                        <h4>Day-02</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                    </div>
                    <div class="single_destination">
                        <h4>Day-03</h4>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words.</p>
                    </div>
                </div>
                <div class="bordered_1px"></div>
                
            </div>           
        </div>
    </div>

{{-- GAMBAR GAMBAR --}}
<div class="container">
    <div class="section-top-border">
        <h3>Image Gallery</h3>
        <div class="row gallery-item">
            <div class="col-md-4">
                <a href="{{ asset('template/img/elements/g1.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(/template/img/elements/g1.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('template/img/elements/g2.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(/template/img/elements/g2.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('template/img/elements/g3.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(/template/img/elements/g3.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ asset('template/img/elements/g4.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(/template/img/elements/g4.jpg);"></div>
                </a>
            </div>
            <div class="col-md-6">
                <a href="{{ asset('template/img/elements/g5.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(/template/img/elements/g5.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('template/img/elements/g6.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(/template/img/elements/g6.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('template/img/elements/g7.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(/template/img/elements/g7.jpg);"></div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ asset('template/img/elements/g8.jpg') }}" class="img-pop-up">
                    <div class="single-gallery-image" style="background: url(/template/img/elements/g8.jpg);"></div>
                </a>
            </div>
        </div>
    </div>
    </div>
    
</div>


