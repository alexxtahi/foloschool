<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @php
            $pictures = ['assets/img/wallpaper/' . rand(1, 9) . '.jpg', 'assets/img/wallpaper/' . rand(1, 9) . '.jpg'];
        @endphp
        <div class="carousel-item active">
            <img class="w-100" src="{{ asset($pictures[0]) }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 960px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Informations centralisées -
                        Qualité de service - Partage de l’information</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                        Accédez à distance aux informations scolaires</h1>
                    </h1>
                    <a href="quote.html"
                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Télécharger</a>
                    <a href="{{ route('contact') }}"
                        class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{ asset($pictures[1]) }}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 960px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">L'innovation à portée de main
                    </h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">
                        La solution préférée des écoles et des parents
                    </h1>
                    <a href="quote.html"
                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Télécharger</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Précédent</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Suivant</span>
    </button>
</div>
</div>
<!-- Navbar & Carousel End -->
