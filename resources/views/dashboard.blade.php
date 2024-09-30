@extends('layout.layout')

@section('main')
    <section class="hero d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 class="">SEWING WORKSHOP</h1>
                    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat veritatis sapiente reprehenderit natus! Facere hic, eius ut voluptatem quaerat dignissimos molestiae velit, et veniam fugit quidem, repellat neque nemo corrupti!</p>
                    <a href="#" class="btn btn-primary">Get Started</a>
                </div>

                <div class="col-md-6">
                    <img src="{{ asset('assets/img/dashboard.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
@endsection