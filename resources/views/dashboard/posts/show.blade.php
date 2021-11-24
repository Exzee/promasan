@extends('dashboard.layouts.main')

@section('container')


<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- ============================================================== -->
            <!-- pageheader  -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-header">
                        <h2 class="pageheader-title">My Posts </h2>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Postingan</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>


                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->


                {{-- DETAIL ARTIKEL --}}
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                    <div class="destination_details_info p-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-9">
                                    <div class="destination_info mb-5">
                                        <a class="btn btn-success" href="/dashboard/posts"><i
                                                class="fas fa-arrow-left"></i> Back To Artikel</a>
                                        <a class="btn btn-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><i
                                                class="fas fa-edit"></i> Edit</a>
                                        <form action="/dashboard/posts/{{ $post->slug }}" method="post"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Yakin Hapus data?')"><i
                                                    class="far fa-times-circle"></i> Hapus</button>
                                        </form>

                                        <h3>{{ $post['title'] }}</h3>
                                        <p>{!! $post['body'] !!}</p>

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

                                        @if($post->image_thumbnail)
                                            <a href="{{ asset('storage/' . $post->image_thumbnail) }}"
                                                class="img-pop-up">
                                                <div class="single-gallery-image"
                                                    style="background: url(/storage/{{ $post->image_thumbnail }});">
                                                </div>
                                            </a>
                                        @else
                                            <a href="{{ asset('template/img/pages/no-image.png') }}"
                                                class="img-pop-up">
                                                <div class="single-gallery-image"
                                                    style="background: url(template/img/pages/no-image.png);"></div>
                                            </a>
                                        @endif
                                    </div>

                                    <div class="col-md-4">
                                        {{-- GAMBAR 1 --}}
                                        @if($post->image_post_satu)
                                            <a href="{{ asset('storage/' . $post->image_post_satu) }}"
                                                class="img-pop-up">
                                                <div class="single-gallery-image"
                                                    style="background: url(/storage/{{ $post->image_post_satu }});">
                                                </div>
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
                                        @if($post->image_post_dua)
                                            <a href="{{ asset('storage/' . $post->image_post_dua) }}"
                                                class="img-pop-up">
                                                <div class="single-gallery-image"
                                                    style="background: url(/storage/{{ $post->image_post_dua }});">
                                                </div>
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
                                        @if($post->image_post_tiga)
                                            <a href="{{ asset('storage/' . $post->image_post_tiga) }}"
                                                class="img-pop-up">
                                                <div class="single-gallery-image"
                                                    style="background: url(/storage/{{ $post->image_post_tiga }});">
                                                </div>
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

                </div>

            </div>
        </div>
    </div>

</div>
<!-- ============================================================== -->
<!-- end wrapper  -->
<!-- ============================================================== -->
</div>
@endsection
