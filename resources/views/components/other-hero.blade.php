@php
$pictures = 'assets/img/wallpaper/' . rand(2, 6) . '.jpg';
@endphp
<div class="container-fluid bg-primary bg-header py-5"
    style="margin-bottom: 90px; background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url('{{ asset($pictures) }}') center / cover no-repeat">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">{{ $page_title }}</h1>
            <a href="{{ route('home') }}" class="h5 text-white">Accueil</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ $page_route }}" class="h5 text-white">{{ $page_title }}</a>
        </div>
    </div>
</div>
