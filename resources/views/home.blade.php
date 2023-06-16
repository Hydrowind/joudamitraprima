@extends('layouts.user')

@section('content')
<!-- Masthead-->
<header class="masthead" id="masterhead">
    <div class="container 100-vh">
        <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> -->
    </div>
</header>

<!-- About-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="text-muted" id="subabout">Joudah Oud</h3>
        </div>
        <div class="text-center">
            <p class="text-muted" id="descabout">Jawda Mitra Prima is a domestic agarwood manufacturing company. In collaboration with a legal distribution service provider in Papua and having a Domestic Plant and Animal Transport Letter (SATSDN) allows Jawda Mitra Prima to export part of its production to various countries.
                Jawda Mitra Prima strives to answer customer requests by continuing to innovate to make Sana'i and Incense. This managed to get a positive response from customers and made Jawda Mitra Prima advance towards the opening of Sana'i and the Incense Industry in 2020. </p>
        </div>
    </div>
</section>

<!-- visi misi-->
<section class="page-section" id="vision">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Vission & Mission</h2>
            <h3 class="section-subheading text-muted">Joudah Oud</h3>
        </div>
        <ul class="timeline">
            <li class="timeline-inverted">
                <div class="timeline-panel" id="visi">
                    <div class="timeline-heading" id="visi">
                        <h4 class="subheading" id="visimisi">Vision Joudah</h4>
                    </div>
                    <div class="timeline-body" id="visi">
                        <p class="text-muted" id="visimisi">To be a company that prioritizes aspects of Professionalism, Quality, and Profitability, to achieve prosperity and glory through the best performance in the global Agarwood industry.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-panel" id="misi">
                    <div class="timeline-heading">
                        <h4 class="subheading" id="visimisi">Mission Joudah</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted" id="visimisi">Developing quality human resources, by creating a good work environment to achieve customer satisfaction.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>


<!-- Services-->
<!-- <section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">WE ARE REGISTERED ON</h2>
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-6">
                <span class="fa-stack fa-3x">
                    <i class="timeline-image">
                        <img class="rounded-circle img-fluid center-block" src="/assets/img/kemenlhk-logo.png" alt="..." style="display: block; margin: 0 auto;">
                    </i>
                </span>
                <h4 class="my-3">KEMEN LHK</h4>
                <p class="text-muted" id="registered">148/k.13/TU/TSL/10/2019</p>
            </div>
            <div class="col-md-6">
                <span class="fa-stack fa-3x">
                    <i class="timeline-image">
                        <img class="img-fluid center-block" src="/assets/img/asgarin-logo.png" alt="..." style="display: block; margin: 0 auto;">
                    </i>
                </span>
                <h4 class="my-3">Asgarin</h4>
                <p class="text-muted" id="registered">032/KEP-ASG/E/XII/2019</p>
            </div>
        </div>
    </div>
</section> -->


<!-- Portfolio Grid-->
<section class="page-section bg-brown" id="portfolio">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Gallery</h2>
    </div>
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($data as $i => $d)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}" aria-current="{{ $i == 0 ? 'true' : '' }}" aria-label="Slide {{ $i+1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($data as $i => $d)
                <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                    <img src="{{ $d->imageUrl }}" class="d-block w-100" alt="...">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
@endsection('content')

@section('modal')
<!-- Portfolio Modals-->
@foreach($data as $i => $d)
<div class="portfolio-modal modal fade" id={{ "portfolioModal" . $i }} tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <!-- <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                            <img class="img-fluid d-block mx-auto" src="{{ $d->imageUrl }}" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection('modal')