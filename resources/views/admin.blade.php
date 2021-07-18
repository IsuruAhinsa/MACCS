@extends('layouts.app')

@section('main')

    @include('partials.sidebar')
    @include('partials.header')

    <main id="main-container">

        @yield('content')

    </main>

    @include('partials.footer')

@endsection
