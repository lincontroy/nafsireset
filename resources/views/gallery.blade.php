@extends('layouts.main')

@section('content')

@php
    use Illuminate\Support\Facades\File;

    $images = collect(File::files(public_path('imagess')))->map(function ($file) {
        return $file->getFilename();
    });
@endphp

<!-- ================> Gallery section start here <================== -->
<div class="gallery-section padding--top padding--bottom" id="gallery">
    <div class="container">
        <div class="section-header style-2 text-center mb-5">
            <h2 class="mb-3">Our Photo Gallery</h2>
            <p>Explore some of our most memorable moments captured through the lens.</p>
        </div>

        <div class="section-wrapper">
            <div class="gallery gallery-style2">
                <div class="gallery__filter mb-4">
                    <ul class="d-flex flex-wrap gap-3 justify-content-center">
                        <li data-filter="*" class="active">All</li>
                      
                    </ul>
                </div>

                <div class="row g-0 grid">
                    @foreach($images as $image)
                        <div class="col-xl-3 col-lg-4 col-sm-6 col-12 charity">
                            <div class="gallery__item m-2">
                                <div class="gallery__inner">
                                    <div class="gallery__thumb">
                                        <img src="{{ asset('imagess/' . $image) }}" alt="Gallery image - {{ pathinfo($image, PATHINFO_FILENAME) }}" class="w-100 rounded shadow-sm">
                                    </div>
                                    <div class="gallery__content text-center">
                                        <a href="{{ asset('imagess/' . $image) }}" data-rel="lightcase" class="gallery__icon">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="gallery__title text-center mt-2">
                                    <h5 class="mb-1">{{ Str::title(str_replace('_', ' ', pathinfo($image, PATHINFO_FILENAME))) }}</h5>
                                    <span>Photo Gallery</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
<!-- ================> Gallery section end here <================== -->

@endsection
