@extends('layout.layout')

@section('main')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-2" style="width: 32rem;">
                    <img src="{{ asset('assets/img/about-1.jpg') }}" class="rounded" alt="..." style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="card mb-2" style="width: 32rem;">
                    <img src="{{ asset('assets/img/about-2.jpg') }}" class="rounded" alt="..." style="width: 100%; height: 200px; object-fit: cover;">
                </div>
                <div class="card" style="width: 32rem;">
                    <img src="{{ asset('assets/img/about-3.jpg') }}" class="rounded" alt="..." style="width: 100%; height: 200px; object-fit: cover;">
                </div>
            </div>

            <div class="col-md-6">
                <h6 class="">About</h6>
                <h4 class="">Introducing the best tailors in the city!</h4>
                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores omnis ea consectetur, quas numquam veritatis molestiae adipisci ex possimus voluptate nulla animi sapiente iste, reiciendis alias debitis, minus quo incidunt!</p>
            </div>
        </div>
    </div>
@endsection
