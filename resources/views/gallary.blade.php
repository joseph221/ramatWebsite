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
                        <a href="{{ url('assets/images/sample_2.jpg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ url('assets/images/sample_2.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('assets/images/youngrangers.jpg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ url('assets/images/youngrangers.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('assets/images/ontour2.jpeg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ url('assets/images/ontour2.jpeg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('assets/images/freeriver.jpg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ url('assets/images/freeriver.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('assets/images/sonsoil.jpg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ url('assets/images/sonsoil.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('assets/images/womenemp.jpg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ url('assets/images/womenemp.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('assets/images/school.jpg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ url('assets/images/school.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="{{ url('assets/images/sample_2.jpg') }}" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="{{ url('assets/images/greenschool.jpg') }}" alt="" class="img-fluid">
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
                <div class="col-lg-3 col-md-4">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/pic8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                            <img src="assets/img/gallery/pic8.jpg" alt="" class="img-fluid">
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