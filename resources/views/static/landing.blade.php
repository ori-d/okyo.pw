@extends('main')

@push('meta-tags')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>Электрик Алексей</title>
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/electric-16.png') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/electric-32.png') }}" />
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/electric-96.png') }}" />
@vite('resources/css/app.css')
@endpush

@push('scripts-end')
@vite('resources/js/app.js')
@endpush

@section('content')
@include('static.landing.header')
@include('static.landing.main')
@include('static.landing.footer')
@endsection
