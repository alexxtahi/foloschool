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
        'page_title' => 'A propos',
        'page_route' => route('about'),
    ])

    {{-- Search --}}
    {{-- @include('components.search') --}}

    {{-- About --}}
    @include('components.about-preview')

    {{-- Team --}}
    @include('components.team')

    {{-- Partners --}}
    @include('components.partners')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Scripts --}}
    @include('includes.js')
</body>

</html>
