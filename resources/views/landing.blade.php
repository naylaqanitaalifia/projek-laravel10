@extends('layout.layout')

@section('title')
    <title>Gallery</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/landing.css') }}">
@endsection

@section('main')
    <section class="container my-5">
        <h1 class="text-center mb-3">Our Gallery</h1>
        <div class="divider mb-4"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ ('assets/img/gallery-1.jpg') }}" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ ('assets/img/gallery-2.jpg') }}" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="{{ asset('assets/img/gallery-1.jpg') }}" class="card-img-top img-fluid" alt="..." style="object-fit: cover; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection