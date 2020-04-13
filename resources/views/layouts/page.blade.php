@extends('index')

@push('head')
    <link rel="stylesheet" href="/skins/polaris/polaris.css">
    <link rel="stylesheet" href="/css/app.css">
@endpush

@section('main')
    @include('components.contact-header')
    @include('components.navbar')
    @yield('content')

    {{-- Button - to top --}}
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <em class="fas fa-angle-up"></em>
    </button>

    @include('components.footer')
@endsection

@push('body')
    <script src="/js/script.min.js"></script>
@endpush
