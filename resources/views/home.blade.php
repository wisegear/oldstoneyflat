@extends('layouts.app')
@section('content')
<section class="hero">
    <div class="eyebrow">A coastal stay is taking shape</div>
    <h1>Your Stonehaven<br><em>home from home.</em></h1>
    <p class="hero-copy">Old Stoney Flat is a welcoming holiday retreat in the heart of this historic Aberdeenshire harbour town. Our new website—and everything you need to plan your stay—is coming soon.</p>
    <div class="hero-actions"><a class="button" href="{{ route('about') }}">Discover the story</a><span class="coming-soon">Bookings opening soon</span></div>
    <div class="location-card"><span class="location-number">56.96° N</span><span>Stonehaven<br>Aberdeenshire</span><span class="location-detail">Sea air · Harbour walks · Scottish charm</span></div>
</section>
@endsection
