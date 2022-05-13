<!-- Spinner Start -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <small class="me-3 text-light">
                    <i class="fa fa-map-marker-alt me-2"></i>
                    <a href="https://goo.gl/maps/3QXi1FhWwTuGbHFr7" target="_blank">2ème étage, Centre commercial Alpha
                        Blondy, Cocody
                        Riviera 2</a>
                </small>
                <small class="me-3 text-light">
                    <i class="fa fa-phone-alt me-2"></i>
                    <a href="tel:+225 25 20 00 22 42">+225 25 20 00 22 42</a> /
                    <a href="tel:+225 07 48 46 35 49">+225 07 48 46 35 49</a>
                </small>
                <small class="text-light"><i class="fa fa-envelope-open me-2"></i><a
                        href="mailto:contact@foloschool.com">contact@foloschool.com</a></small>
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                    href="https://www.facebook.com/foloschool">
                    <i class="fab fa-facebook-f fw-normal"></i></a>
                <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2"
                    href="https://www.linkedin.com/company/folo-education">
                    <i class="fab fa-linkedin-in fw-normal"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="{{ route('home') }}" class="navbar-brand p-0 d-flex flex-row custom-header-logo-group">
            <img class="custom-header-logo" src="{{ asset('assets/img/simple-icon-folo.png') }}" alt="Logo FOLO" />
            <h1 class="m-0"> FOLO Education</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
                <a href="about.html" class="nav-item nav-link">A propos</a>
                <a href="service.html" class="nav-item nav-link">Avantages</a>
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Our features</a>
                        <a href="team.html" class="dropdown-item">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                    </div>
                </div> --}}
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            {{-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></butaton> --}}
            <a href="" class="btn btn-primary py-2 px-4 ms-3">Télécharger</a>
        </div>
    </nav>
