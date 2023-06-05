<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Jaoudah Oud</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="" href="#page-top"><img style="height: 100px;" src="/assets/img/logo.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#masterhead">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/store">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="/news">News</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" id="masterhead">
        <div class="container">
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
                    <p class="text-muted" id="registered">148/k.13/TU/TSL/10/2019</p>
                </div>
                <div class="col-md-6">
                    <span class="fa-stack fa-3x">
                        <i class="timeline-image">
                            <img class="img-fluid center-block" src="/assets/img/asgarin.jpg" alt="..." style="display: block; margin: 0 auto;">
                        </i>
                    </span>
                    <h4 class="my-3">Asgarin</h4>
                    <p class="text-muted" id="registered">032/KEP-ASG/E/XII/2019</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Portfolio Grid-->
    <section class="page-section bg-brown" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Gallery</h2>
            </div>
            <div class="row">
                <!-- Portfolio item 0-->
                @foreach($data as $d)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ $d->imageUrl }}" alt="..." />
                        </a>
                    </div>
                </div>
                @endforeach

                <!-- Portfolio item 1-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="/assets/img/galery1.webp" alt="..." />
                        </a>
                    </div>
                </div>

                <!-- Portfolio item 2-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="/assets/img/galery2.webp" alt="..." />
                        </a>
                    </div>
                </div>

                <!-- Portfolio item 3-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="/assets/img/galery3.webp" alt="..." />
                        </a>
                    </div>
                </div>

                <!-- Portfolio item 4-->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="/assets/img/galery4.webp" alt="..." />
                        </a>
                    </div>
                </div>

                <!-- Portfolio item 5-->
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="/assets/img/galery5.webp" alt="..." />
                        </a>
                    </div>
                </div>

                <!-- Portfolio item 6-->
                <div class="col-lg-4 col-sm-6">
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

    <!-- Footer-->
    <footer class="footer">
        <div class="container">
            <div class="row ">
                <div class="col-md-10">
                    <h3>Contact Us</h3>
                    <p>Address: Jl. Joglo Raya No.67, Kembangan, Kota Jakarta Barat, DKI Jakarta, 11640</p>
                    <p>Phone: (+62)813-8985-1189 </p>
                    <p>Email: Joudamitraprima@gmail.com</p>
                </div>
                <div class="col-md-2">
                    <h3>SHOPEE</h3>
                    <div class="social-links">
                        <div class="barcode-footer">
                            <img src="https://static.wixstatic.com/media/ce3925_09aa75c01fa543d6b551623464b0451d~mv2.png/v1/fill/w_212,h_212,al_c,lg_1,q_85,enc_auto/QRcode.png" alt="Barcode" width="100" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; 2023 Joudah Oud. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>


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
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="/assets/js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>