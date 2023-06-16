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
        <div class="dropdown mb-3">
            <b class="text-white d-inline">Sort By: </b>
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ request()->get('sort') ? request()->get('sort') : 'No Sort'}}
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('store', ['sort' => 'highest_price']) }}">Highest Price</a></li>
                <li><a class="dropdown-item" href="{{ route('store', ['sort' => 'lowest_price']) }}">Lowest Price</a></li>
                <li><a class="dropdown-item" href="{{ route('store', ['sort' => 'most_popular']) }}">Most Popular</a></li>
                <li><a class="dropdown-item" href="{{ route('store') }}">No Sort</a></li>
            </ul>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($data as $d)
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div> -->
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ $d->imageUrl }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">{{ $d->name }}</h5>
                            <!-- Product reviews-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        @for($i=0 ; $i<$d->rating ; $i++)
                                            <div class="fa-solid fa-star"></div>
                                        @endfor
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p class="badge bg-dark text-white">Rp {{ number_format($d->price, 0, '', '.') }}</p>
                                </div>
                            </div>
                            <!-- Product price-->
                            <!-- <span class="text-muted text-decoration-line-through">Rp 100000</span> -->

                            <p>{{ $d->description }}</p>
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