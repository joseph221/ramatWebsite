@extends('layouts.app')
@section('content')

    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Our Gallery</h2>
                <ul>
                    <li> <a href="/"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Gallery</li>
                </ul>
            </div>
        </div>
    </div>
    <div id="gallery" class="gallery">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-0">

                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/images/downloads/studies.jpg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ asset('assets/images/downloads/studies.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/images/logo.jpeg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ asset('assets/images/logo.jpeg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/pic3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="assets/img/gallery/pic3.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/pic4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="assets/img/gallery/pic4.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/pic5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="assets/img/gallery/pic5.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/pic6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="assets/img/gallery/pic6.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/pic7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="assets/img/gallery/pic7.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/pic8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="assets/img/gallery/pic8.jpg" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection