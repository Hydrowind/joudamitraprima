@extends('layouts.user')

@section('content')
<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Joudah Store</h1>
        </div>
    </div>
</header>
<!-- Section-->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($data as $d)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ $d->imageUrl }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $d->name }}</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                                <div class="fa-solid fa-star"></div>
                            </div>
                            <!-- Product price-->
                            <!-- <span class="text-muted text-decoration-line-through">Rp 100000</span> -->
                            Rp. {{ $d->price }}
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center"><a target="_blank" class="btn btn-outline-dark mt-auto" href="{{ $d->link }}">Buy Now</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection