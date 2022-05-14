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
    @include('components.other-hero', [
        'page_title' => 'Avantages',
        'page_route' => route('avantages'),
    ])

    {{-- Search --}}
    {{-- @include('components.search') --}}

    {{-- About --}}
    @include('components.avantages-preview')

    {{-- Team --}}
    @include('components.testimonials')

    {{-- Partners --}}
    @include('components.partners')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Scripts --}}
    @include('includes.js')
</body>

</html>
