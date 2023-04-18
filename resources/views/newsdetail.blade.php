@extends('layouts.user')

@section('content')
<section class="page-section" id="news">
  <div class="container">
    <div class="text-center mt-5">
      <h2 class="section-heading text-uppercase text-white">{{ $data->title }}</h2>
    </div>
    <div class="row text-center mt-5">
      <div class="col-md-12 mt-3">
        <div class="card">
          <img src="{{ $data->imageUrl }}" class="card-img-top" alt="...">
          <div class="card-body">
            <!-- <h5 class="card-title"></h5> -->
            <p class="card-text">
              {{ $data->content }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection