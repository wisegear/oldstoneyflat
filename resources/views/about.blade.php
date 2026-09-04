@extends('layouts.app', ['title' => 'About'])
@section('content')
<section class="page-panel">
    <div class="eyebrow">About Old Stoney Flat</div><h1>A place to slow down by the sea.</h1>
    <div class="prose"><p>Old Stoney Flat is a holiday home in Stonehaven, a characterful coastal town on Scotland's north-east coast.</p><p>We are preparing the flat and putting together the details that will make your visit special. Soon, this page will share more about the property, local highlights and how to book your stay.</p></div>
    <a class="text-link" href="{{ route('home') }}">Back to home →</a>
</section>
@endsection
