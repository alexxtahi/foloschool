<!DOCTYPE html>
<html lang="fr">

<head>
    {{-- metas --}}
    @include('includes.meta')
    {{-- styles --}}
    @include('includes.css')
</head>

<body>
    {{-- Header --}}
    @include('includes.header')

    {{-- Hero --}}
    @include('components.home-hero')

    {{-- Search --}}
    {{-- @include('components.search') --}}

    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0 d-flex justify-content-center">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Parents Satisfaits</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">6650</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-school text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Ecoles Partenaires</h5>
                            <h1 class="mb-0" data-toggle="counter-up">16</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                        style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                            style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Awards</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">1</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    {{-- About --}}
    @include('components.about-preview')

    {{-- Features --}}
    @include('components.features')

    {{-- Avantages --}}
    @include('components.avantages-preview')

    {{-- Pricing --}}
    {{-- @include('components.pricing') --}}

    {{-- Demande --}}
    @include('components.demande')

    {{-- Testimonials --}}
    @include('components.testimonials')

    {{-- Team --}}
    @include('components.team')

    {{-- Blog --}}
    @include('components.blog-preview')

    {{-- Partners --}}
    @include('components.partners')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Scripts --}}
    @include('includes.js')
</body>

</html>
