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
        'page_title' => 'Contacts',
        'page_route' => route('contact'),
    ])

    {{-- Search --}}
    {{-- @include('components.search') --}}

    {{-- Contact --}}
    @include('components.contact-preview')

    {{-- Partners --}}
    @include('components.partners')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Scripts --}}
    @include('includes.js')
</body>

</html>
