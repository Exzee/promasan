@extends('layouts.main2')

@section('title', 'Detail Artikel')

<div class="destination_banner_wrap overlay">
    <div class="destination_text text-center">
        <h3>{{ $post->title }}</h3>
        <p>Posted By: {{ $post->author->name }} about {{ $post->category->name }}</p>
    </div>
</div>

{{-- DETAIL ARTIKEL --}}
<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="thumb">
                    <p class="price"><a href="/lokasi/{{ $post->category->name }}">
                            {{ $post->category->name }}</a></p>
                </div>
                <div class="destination_info">
                    <h3>{{ $post['title'] }}</h3>
                    <p>{!!  $post['body']  !!}</p>

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
                <div class="col-md-12">

                    @if ($post->image_thumbnail)
                        <a href="{{ asset('storage/' . $post->image_thumbnail) }}" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url(/storage/{{ $post->image_thumbnail }});"></div>
                        </a>
                    @else
                        <a href="{{ asset('template/img/pages/no-image.png') }}" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url(template/img/pages/no-image.png);"></div>
                        </a>
                    @endif
                </div>

                <div class="col-md-4">
                    {{-- GAMBAR 1 --}}
                    @if ($post->image_post_satu)
                        <a href="{{ asset('storage/' . $post->image_post_satu) }}" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url(/storage/{{ $post->image_post_satu }});"></div>
                        </a>
                    @else
                        {{-- <a href="https://source.unsplash.com/653x250/?travel" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url(https://source.unsplash.com/653x250/?travel);"></div>
                        </a> --}}
                    @endif
                </div>
                <div class="col-md-4">
                    {{-- GAMBAR 2 --}}
                    @if ($post->image_post_dua)
                        <a href="{{ asset('storage/' . $post->image_post_dua) }}" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url(/storage/{{ $post->image_post_dua }});"></div>
                        </a>
                    @else
                        {{-- <a href="https://source.unsplash.com/653x250/?travel" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url(https://source.unsplash.com/653x250/?travel);"></div>
                        </a> --}}
                    @endif
                </div>
                <div class="col-md-4">
                    {{-- GAMBAR 3 --}}
                    @if ($post->image_post_tiga)
                        <a href="{{ asset('storage/' . $post->image_post_tiga) }}" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url(/storage/{{ $post->image_post_tiga }});"></div>
                        </a>
                    @else
                        {{-- <a href="https://source.unsplash.com/653x250/?travel" class="img-pop-up">
                            <div class="single-gallery-image"
                                style="background: url(https://source.unsplash.com/653x250/?travel);"></div>
                        </a> --}}
                    @endif

                </div>
            </div>
        </div>
    </div>

</div>
