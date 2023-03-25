@extends('layouts.user')

@section('content')
<section class="page-section" id="news">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase text-white">NEWS</h2>
        </div>
        <div class="row text-center mt-5">
          @for($i=0 ; $i<6 ; $i++)
          <div class="col-md-4 mt-3">
            <div class="card">
              <img src="https://static.vecteezy.com/system/resources/thumbnails/004/216/831/original/3d-world-news-background-loop-free-video.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Perbelanjaan tahun 2023 meningkat 12%</h5>
                <p class="card-text">Peningkatan pembelanjaan masyarakat di Indonesia merupakan indikator yang positif bagi pertumbuhan ekonomi...</p>
                <a href="/news/detail" class="btn btn-primary">Lihat Berita</a>
              </div>
            </div>
          </div>
          @endfor
        </div>
    </div>
</section>
@endsection