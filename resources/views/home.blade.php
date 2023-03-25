@extends('layouts.user')

@section('content')
<!-- Masthead-->
<header class="masthead" id="masterhead">
    <div class="container">
        <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> -->
    </div>
</header>

<!-- About-->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Joudah Oud</h3>
        </div>
        <div class="text-center">
            <p class="text-muted">Jawda Mitra Prima is a domestic agarwood manufacturing company. In collaboration with a legal distribution service provider in Papua and having a Domestic Plant and Animal Transport Letter (SATSDN) allows Jawda Mitra Prima to export part of its production to various countries.
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
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/5898.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Vision Joudah</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">To be a company that prioritizes aspects of Professionalism, Quality, and Profitability, to achieve prosperity and glory through the best performance in the global Agarwood industry.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="/assets/img/5899.jpg" alt="..." /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Mission Joudah</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Developing quality human resources, by creating a good work environment to achieve customer satisfaction.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>


<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">WE ARE REGISTERED ON</h2>
        </div>
        <div class="row text-center mt-5">
            <div class="col-md-6">
                <span class="fa-stack fa-3x">
                    <i class="timeline-image">
                        <img class="rounded-circle img-fluid center-block" src="/assets/img/kemenlhk.png" alt="..." style="display: block; margin: 0 auto;">
                    </i>
                </span>
                <h4 class="my-3">KEMEN LHK</h4>
                <p class="text-muted">148/k.13/TU/TSL/10/2019</p>
            </div>
            <div class="col-md-6">
                <span class="fa-stack fa-3x">
                    <i class="timeline-image">
                        <img class="img-fluid center-block" src="/assets/img/asgarin.jpg" alt="..." style="display: block; margin: 0 auto;">
                    </i>
                </span>
                <h4 class="my-3">Asgarin</h4>
                <p class="text-muted">032/KEP-ASG/E/XII/2019</p>
            </div>
        </div>
    </div>
</section>


<!-- Portfolio Grid-->
<section class="page-section bg-brown" id="gallery">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Gallery</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/assets/img/galery1.webp" alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/assets/img/galery2.webp" alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/assets/img/galery3.webp" alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/assets/img/galery4.webp" alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/assets/img/galery5.webp" alt="..." />
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="/assets/img/galery6.webp" alt="..." />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@section('modal')
<!-- Portfolio Modals-->
<!-- Portfolio item 1 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="/assets/img/galery1.webp" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 2 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="/assets/img/galery2.webp" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 3 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="/assets/img/galery3.webp" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 4 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="/assets/img/galery4.webp" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 5 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="/assets/img/galery5.webp" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio item 6 modal popup-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase">Project Name</h2>
                            <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                            <img class="img-fluid d-block mx-auto" src="/assets/img/galery6.webp" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection