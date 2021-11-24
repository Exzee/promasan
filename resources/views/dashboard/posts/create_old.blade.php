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
                                        <form action="/dashboard/posts" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="title" class="col-form-label">Judul Artikel</label>
                                                <input name="title" id="title" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="slug">Link Address Artikel</label>
                                                <input name="slug" id="slug" type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('slug') }}" required>                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="category">Pilih Lokasi</label>
                                                <select class="form-control" id="category" name="category_id">
                                                    @foreach ($categories as $category)
                                                    @if (old('category_id') == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>                                                        
                                                    @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>                                                        
                                                    @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="body">Isi Artikel</label>
                                                @error('body')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                                <trix-editor input="body"></trix-editor>
                                            </div>
                                            <div class="card-body border-top">
                                                <button type="submit" class="btn btn-primary">Create Post</button>
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


        document.addEventListener('trix-file-accept', function(e){
            e.preventDevault();
        });
    </script>

@endsection