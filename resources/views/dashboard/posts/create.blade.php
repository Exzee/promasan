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
                            <h2 class="pageheader-title">Create New Post </h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">New Post</a></li>
                                    </ol>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- basic form  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            {{-- <h5 class="card-header">Basic Form</h5> --}}
                            <div class="card-body">
                                <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="col-form-label">Judul Artikel</label>
                                        <input name="title" id="title" type="text"
                                            class="form-control @error('title') is-invalid @enderror"
                                            value="{{ old('title') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Link Address Artikel</label>
                                        <input name="slug" id="slug" type="text"
                                            class="form-control @error('slug') is-invalid @enderror"
                                            value="{{ old('slug') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Pilih Lokasi</label>
                                        <select class="form-control" id="category" name="category_id">
                                            @foreach ($categories as $category)
                                                @if (old('category_id') == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}
                                                    </option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- UPLOAD IMAGE THUMBNAIL --}}
                                    <img class="gambar-preview img-fluid mb-3 col-sm-5">
                                    <div class="custom-file mb-3">
                                        <input type="file"
                                            class="custom-file-input @error('image_thumbnail') is-invalid @enderror"
                                            id="image_thumbnail" name="image_thumbnail" onchange="previewImage()">
                                        <label class="custom-file-label" for="image_thumbnail"><i
                                                class="fas fa-upload"></i> Upload Image Thumbnail</label>
                                        @error('image')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Isi Artikel</label>
                                        @error('body')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                        {{-- TRIX EDITOR --}}
                                        <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                        <trix-editor input="body"></trix-editor>

                                    </div>

                                    {{-- UPLOAD IMAGE 1 --}}
                                    <img class="gambar-preview-satu img-fluid mb-3 col-sm-5">
                                    <div class="custom-file mb-3">
                                        <input type="file"
                                            class="custom-file-input @error('image_post_satu') is-invalid @enderror"
                                            id="image_post_satu" name="image_post_satu" onchange="previewImageSatu()">
                                        <label class="custom-file-label" for="image"><i class="fas fa-upload"></i> Upload
                                            Image</label>
                                        @error('image_post_satu')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- UPLOAD IMAGE 2 --}}
                                    <img class="gambar-preview-dua img-fluid mb-3 col-sm-5">
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input @error('dua') is-invalid @enderror"
                                            id="image_post_dua" name="image_post_dua" onchange="previewImageDua()">
                                        <label class="custom-file-label" for="image"><i class="fas fa-upload"></i> Upload
                                            Image</label>
                                        @error('image_post_dua')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    {{-- UPLOAD IMAGE 3 --}}
                                    <img class="gambar-preview-tiga img-fluid mb-3 col-sm-5">
                                    <div class="custom-file mb-3">
                                        <input type="file"
                                            class="custom-file-input @error('image_post_tiga') is-invalid @enderror"
                                            id="image_post_tiga" name="image_post_tiga" onchange="previewImageTiga()">
                                        <label class="custom-file-label" for="image"><i class="fas fa-upload"></i> Upload
                                            Image</label>
                                        @error('image_post_tiga')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="card-body border-top">
                                        <button type="submit" class="btn btn-primary">Create Post</button>
                                        <a href="/dashboard/posts" type="submit" class="btn btn-secondary">Cancel</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form  -->
                <!-- ============================================================== -->

            </div>
        </div>

        <div class="container-fluid dashboard-content ">
            <h2>INI ISI KONTEN bawah</h2>
        </div>

    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });


        document.addEventListener('trix-file-accept', function(e) {
            e.preventDevault();
        });

        // PREVIEW THUMBNAIL
        function previewImage() {
            const image = document.querySelector('#image_thumbnail');
            const imgPreview = document.querySelector('.gambar-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        };
        // PREVIEW IMAGE SATU
        function previewImageSatu() {
            const image_post_satu = document.querySelector('#image_post_satu');
            const imgPreviewSatu = document.querySelector('.gambar-preview-satu');

            imgPreviewSatu.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image_post_satu.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreviewSatu.src = oFREvent.target.result;
            }
        };
        // PREVIEW IMAGE DUA
        function previewImageDua() {
            const image_post_dua = document.querySelector('#image_post_dua');
            const imgPreviewDua = document.querySelector('.gambar-preview-dua');

            imgPreviewDua.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image_post_dua.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreviewDua.src = oFREvent.target.result;
            }
        };
        // PREVIEW IMAGE TIGA
        function previewImageTiga() {
            const image_post_tiga = document.querySelector('#image_post_tiga');
            const imgPreviewTiga = document.querySelector('.gambar-preview-tiga');

            imgPreviewTiga.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image_post_tiga.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreviewTiga.src = oFREvent.target.result;
            }
        };
    </script>

@endsection
