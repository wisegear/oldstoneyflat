@extends('layouts.app')
@section('content')
<section class="hero">
    <div class="eyebrow">A coastal stay is taking shape</div>
    <h1>Your Stonehaven<br><em>home from home.</em></h1>
    <p class="hero-copy">Old Stoney Flat is a welcoming holiday retreat in the heart of this historic Aberdeenshire harbour town. Our new website—and everything you need to plan your stay—is coming soon.</p>
    <p class="hero-copy">Renovation work has now begun, and we expect the flat to be ready to welcome guests in early 2027. We’re taking the time to get it just right — a home for our family, and a place we’ll be proud to share with you.</p>
    <div class="hero-actions"><a class="button" href="{{ route('about') }}">Discover the story</a><span class="coming-soon">Bookings opening soon</span></div>
    <div class="hero-photo"><img src="{{ asset('images/stonehaven-historic-street.jpg') }}" alt="Historic photograph of a Stonehaven street with a clock tower" width="2044" height="1277" fetchpriority="high"></div>
    <div class="location-card"><span class="location-number">56.96° N</span><span>Stonehaven<br>Aberdeenshire</span><span class="location-detail">Sea air · Harbour walks · Scottish charm</span></div>
</section>
@endsection
