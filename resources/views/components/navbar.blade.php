<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="" href="#page-top"><img height="50px" src="/assets/img/logo-horizontal.png" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse fw-bold" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('store') }}">Store</a></li>
                <li class="nav-item"><a class="nav-link" href="/news">News</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ 'https://translate.google.com/translate?sl=auto&tl=en&u=' . env('APP_URL') }}">Language</a></li>
            </ul>
        </div>
    </div>
</nav>