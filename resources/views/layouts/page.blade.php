@extends('index')

@push('head')
    <link rel="stylesheet" href="/skins/polaris/polaris.css">
    <link rel="stylesheet" href="/css/app.css">
@endpush

@section('main')
    @include('components.contact-header')
    @include('components.navbar')
    @yield('content')
    @include('components.footer')
@endsection

@push('body')
    <script src="/build/js/script.min.js"></script>
@endpush
